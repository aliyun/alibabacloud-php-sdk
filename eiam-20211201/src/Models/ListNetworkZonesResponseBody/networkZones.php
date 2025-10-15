<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkZonesResponseBody;

use AlibabaCloud\Dara\Model;

class networkZones extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipv4Cidrs;

    /**
     * @var string[]
     */
    public $ipv6Cidrs;

    /**
     * @var string
     */
    public $networkZoneId;

    /**
     * @var string
     */
    public $networkZoneName;

    /**
     * @var string
     */
    public $networkZoneType;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'ipv4Cidrs' => 'Ipv4Cidrs',
        'ipv6Cidrs' => 'Ipv6Cidrs',
        'networkZoneId' => 'NetworkZoneId',
        'networkZoneName' => 'NetworkZoneName',
        'networkZoneType' => 'NetworkZoneType',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->ipv4Cidrs)) {
            Model::validateArray($this->ipv4Cidrs);
        }
        if (\is_array($this->ipv6Cidrs)) {
            Model::validateArray($this->ipv6Cidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipv4Cidrs) {
            if (\is_array($this->ipv4Cidrs)) {
                $res['Ipv4Cidrs'] = [];
                $n1 = 0;
                foreach ($this->ipv4Cidrs as $item1) {
                    $res['Ipv4Cidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipv6Cidrs) {
            if (\is_array($this->ipv6Cidrs)) {
                $res['Ipv6Cidrs'] = [];
                $n1 = 0;
                foreach ($this->ipv6Cidrs as $item1) {
                    $res['Ipv6Cidrs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkZoneId) {
            $res['NetworkZoneId'] = $this->networkZoneId;
        }

        if (null !== $this->networkZoneName) {
            $res['NetworkZoneName'] = $this->networkZoneName;
        }

        if (null !== $this->networkZoneType) {
            $res['NetworkZoneType'] = $this->networkZoneType;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ipv4Cidrs'])) {
            if (!empty($map['Ipv4Cidrs'])) {
                $model->ipv4Cidrs = [];
                $n1 = 0;
                foreach ($map['Ipv4Cidrs'] as $item1) {
                    $model->ipv4Cidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Ipv6Cidrs'])) {
            if (!empty($map['Ipv6Cidrs'])) {
                $model->ipv6Cidrs = [];
                $n1 = 0;
                foreach ($map['Ipv6Cidrs'] as $item1) {
                    $model->ipv6Cidrs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkZoneId'])) {
            $model->networkZoneId = $map['NetworkZoneId'];
        }

        if (isset($map['NetworkZoneName'])) {
            $model->networkZoneName = $map['NetworkZoneName'];
        }

        if (isset($map['NetworkZoneType'])) {
            $model->networkZoneType = $map['NetworkZoneType'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
