<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Dara\Model;

class ModelRequestMessageEvent extends Model
{
    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $serviceParameters;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var bool
     */
    public $sync;

    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'service' => 'Service',
        'serviceParameters' => 'ServiceParameters',
        'dataType' => 'DataType',
        'sync' => 'Sync',
        'data' => 'Data',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
