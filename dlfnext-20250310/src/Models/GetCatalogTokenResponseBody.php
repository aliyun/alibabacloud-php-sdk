<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class GetCatalogTokenResponseBody extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->token)) {
            Model::validateArray($this->token);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresAtMillis) {
            $res['expiresAtMillis'] = $this->expiresAtMillis;
        }

        if (null !== $this->token) {
            if (\is_array($this->token)) {
                $res['token'] = [];
                foreach ($this->token as $key1 => $value1) {
                    $res['token'][$key1] = $value1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expiresAtMillis'])) {
            $model->expiresAtMillis = $map['expiresAtMillis'];
        }

        if (isset($map['token'])) {
            if (!empty($map['token'])) {
                $model->token = [];
                foreach ($map['token'] as $key1 => $value1) {
                    $model->token[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
