<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
<<<<<<< HEAD
    public function hosts(): array
=======
    public function hosts()
>>>>>>> df0b6d6d897b6edc88e590c585531fa2e222707a
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
