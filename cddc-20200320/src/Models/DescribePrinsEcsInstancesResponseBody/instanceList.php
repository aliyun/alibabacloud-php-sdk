<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsEcsInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsEcsInstancesResponseBody\instanceList\disks;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribePrinsEcsInstancesResponseBody\instanceList\ipList;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var ipList[]
     */
    public $ipList;

    /**
     * @var string[]
     */
    public $securityGroups;

    /**
     * @var string
     */
    public $stauts;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'description' => 'Description',
        'disks' => 'Disks',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'ipList' => 'IpList',
        'securityGroups' => 'SecurityGroups',
        'stauts' => 'Stauts',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        if (\is_array($this->ipList)) {
            Model::validateArray($this->ipList);
        }
        if (\is_array($this->securityGroups)) {
            Model::validateArray($this->securityGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->ipList) {
            if (\is_array($this->ipList)) {
                $res['IpList'] = [];
                $n1 = 0;
                foreach ($this->ipList as $item1) {
                    $res['IpList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->securityGroups) {
            if (\is_array($this->securityGroups)) {
                $res['SecurityGroups'] = [];
                $n1 = 0;
                foreach ($this->securityGroups as $item1) {
                    $res['SecurityGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stauts) {
            $res['Stauts'] = $this->stauts;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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

        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n1 = 0;
                foreach ($map['IpList'] as $item1) {
                    $model->ipList[$n1++] = ipList::fromMap($item1);
                }
            }
        }

        if (isset($map['SecurityGroups'])) {
            if (!empty($map['SecurityGroups'])) {
                $model->securityGroups = [];
                $n1 = 0;
                foreach ($map['SecurityGroups'] as $item1) {
                    $model->securityGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Stauts'])) {
            $model->stauts = $map['Stauts'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
