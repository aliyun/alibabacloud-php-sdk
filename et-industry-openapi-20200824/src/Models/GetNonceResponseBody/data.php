<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\GetNonceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $nonce;
    protected $_name = [
        'expiresIn' => 'ExpiresIn',
        'nonce' => 'Nonce',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresIn) {
            $res['ExpiresIn'] = $this->expiresIn;
        }

        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
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
        if (isset($map['ExpiresIn'])) {
            $model->expiresIn = $map['ExpiresIn'];
        }

        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }

        return $model;
    }
}
