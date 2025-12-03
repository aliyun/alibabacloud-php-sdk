<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\ListHbaseInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $isDefault;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'isDefault' => 'IsDefault',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        return $model;
    }
}
