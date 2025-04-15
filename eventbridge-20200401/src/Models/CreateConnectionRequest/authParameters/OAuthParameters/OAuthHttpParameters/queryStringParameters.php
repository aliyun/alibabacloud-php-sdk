<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateConnectionRequest\authParameters\OAuthParameters\OAuthHttpParameters;

use AlibabaCloud\Dara\Model;

class queryStringParameters extends Model
{
    /**
     * @var string
     */
    public $isValueSecret;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'isValueSecret' => 'IsValueSecret',
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isValueSecret) {
            $res['IsValueSecret'] = $this->isValueSecret;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['IsValueSecret'])) {
            $model->isValueSecret = $map['IsValueSecret'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
