<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;

use AlibabaCloud\Dara\Model;

class bedrockServiceConfig extends Model
{
    /**
     * @var string
     */
    public $awsAccessKey;

    /**
     * @var string
     */
    public $awsRegion;

    /**
     * @var string
     */
    public $awsSecretKey;
    protected $_name = [
        'awsAccessKey' => 'awsAccessKey',
        'awsRegion' => 'awsRegion',
        'awsSecretKey' => 'awsSecretKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->awsAccessKey) {
            $res['awsAccessKey'] = $this->awsAccessKey;
        }

        if (null !== $this->awsRegion) {
            $res['awsRegion'] = $this->awsRegion;
        }

        if (null !== $this->awsSecretKey) {
            $res['awsSecretKey'] = $this->awsSecretKey;
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
        if (isset($map['awsAccessKey'])) {
            $model->awsAccessKey = $map['awsAccessKey'];
        }

        if (isset($map['awsRegion'])) {
            $model->awsRegion = $map['awsRegion'];
        }

        if (isset($map['awsSecretKey'])) {
            $model->awsSecretKey = $map['awsSecretKey'];
        }

        return $model;
    }
}
