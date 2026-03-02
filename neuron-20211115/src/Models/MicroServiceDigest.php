<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MicroServiceDigest extends Model
{
    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var LaneMqGroupInfo
     */
    public $laneMqGroupInfos;
    protected $_name = [
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'laneMqGroupInfos' => 'laneMqGroupInfos',
    ];

    public function validate()
    {
        if (null !== $this->laneMqGroupInfos) {
            $this->laneMqGroupInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->laneMqGroupInfos) {
            $res['laneMqGroupInfos'] = null !== $this->laneMqGroupInfos ? $this->laneMqGroupInfos->toArray($noStream) : $this->laneMqGroupInfos;
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
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['laneMqGroupInfos'])) {
            $model->laneMqGroupInfos = LaneMqGroupInfo::fromMap($map['laneMqGroupInfos']);
        }

        return $model;
    }
}
