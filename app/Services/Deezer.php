<?php


namespace App\Services;


use Illuminate\Support\Facades\Http;

class Deezer
{
    /**
     * Host da API da Deezer
     */
    private const host = 'https://api.deezer.com/';

    /**
     * Obtém os dados dobre o ID de usuário recebido
     *
     * @param $id
     * @return array|mixed
     */
    public function user($id)
    {
        return $this->read("user/" . $id);
    }

    /**
     * Executa a consulta de API e retorna o objeto de resposta
     *
     * @param $path
     * @return array|mixed
     */
    public function read($path)
    {
        $response = Http::get($this->prepareRoute($path));
        return (object) ($response->ok() ? $response->json() : []);
    }

    /**
     * Monta a URL completa com o caminho recebido
     *
     * @param $path
     * @return string
     */
    public function prepareRoute($path): string
    {
        if (strpos($path, '/',) !== 0) {
            $path = '/' . $path;
        }
        return self::host . $path;
    }
}
