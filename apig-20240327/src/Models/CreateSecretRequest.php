<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateSecretRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var KMSConfig
     */
    public $kmsConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $secretData;

    /**
     * @var string
     */
    public $secretSource;
    protected $_name = [
        'description' => 'description',
        'gatewayType' => 'gatewayType',
        'kmsConfig' => 'kmsConfig',
        'name' => 'name',
        'secretData' => 'secretData',
        'secretSource' => 'secretSource',
    ];

    public function validate()
    {
        if (null !== $this->kmsConfig) {
            $this->kmsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }

        if (null !== $this->kmsConfig) {
            $res['kmsConfig'] = null !== $this->kmsConfig ? $this->kmsConfig->toArray($noStream) : $this->kmsConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->secretData) {
            $res['secretData'] = $this->secretData;
        }

        if (null !== $this->secretSource) {
            $res['secretSource'] = $this->secretSource;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }

        if (isset($map['kmsConfig'])) {
            $model->kmsConfig = KMSConfig::fromMap($map['kmsConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['secretData'])) {
            $model->secretData = $map['secretData'];
        }

        if (isset($map['secretSource'])) {
            $model->secretSource = $map['secretSource'];
        }

        return $model;
    }
}
