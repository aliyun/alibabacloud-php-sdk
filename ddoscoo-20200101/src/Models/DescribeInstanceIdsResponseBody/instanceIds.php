<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceIdsResponseBody;

use AlibabaCloud\Dara\Model;

class instanceIds extends Model
{
    /**
     * @var int
     */
    public $edition;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ipMode;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'edition' => 'Edition',
        'instanceId' => 'InstanceId',
        'ipMode' => 'IpMode',
        'ipVersion' => 'IpVersion',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipMode) {
            $res['IpMode'] = $this->ipMode;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IpMode'])) {
            $model->ipMode = $map['IpMode'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
