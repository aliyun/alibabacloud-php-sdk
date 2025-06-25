<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class MoveHostsToNetworkDomainRequest extends Model
{
    /**
     * @var string[]
     */
    public $hostIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkDomainId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hostIds' => 'HostIds',
        'instanceId' => 'InstanceId',
        'networkDomainId' => 'NetworkDomainId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->hostIds)) {
            Model::validateArray($this->hostIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostIds) {
            if (\is_array($this->hostIds)) {
                $res['HostIds'] = [];
                $n1 = 0;
                foreach ($this->hostIds as $item1) {
                    $res['HostIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkDomainId) {
            $res['NetworkDomainId'] = $this->networkDomainId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['HostIds'])) {
            if (!empty($map['HostIds'])) {
                $model->hostIds = [];
                $n1 = 0;
                foreach ($map['HostIds'] as $item1) {
                    $model->hostIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkDomainId'])) {
            $model->networkDomainId = $map['NetworkDomainId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
