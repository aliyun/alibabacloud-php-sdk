<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HandleOidcCallbackResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken' => 'accessToken',
        'expiresIn' => 'expiresIn',
        'tokenType' => 'tokenType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->expiresIn) {
            $res['expiresIn'] = $this->expiresIn;
        }

        if (null !== $this->tokenType) {
            $res['tokenType'] = $this->tokenType;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['expiresIn'])) {
            $model->expiresIn = $map['expiresIn'];
        }

        if (isset($map['tokenType'])) {
            $model->tokenType = $map['tokenType'];
        }

        return $model;
    }
}
