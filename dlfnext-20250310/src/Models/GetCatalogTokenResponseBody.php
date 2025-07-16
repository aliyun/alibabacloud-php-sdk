<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class GetCatalogTokenResponseBody extends Model
{
    /**
     * @example 1749160909000
     *
     * @var int
     */
    public $expiresAtMillis;

    /**
     * @var string[]
     */
    public $token;
    protected $_name = [
        'expiresAtMillis' => 'expiresAtMillis',
        'token' => 'token',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiresAtMillis) {
            $res['expiresAtMillis'] = $this->expiresAtMillis;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCatalogTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expiresAtMillis'])) {
            $model->expiresAtMillis = $map['expiresAtMillis'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
