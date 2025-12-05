<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListVpcConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class vpcConfigList extends Model
{
    /**
     * @var string
     */
    public $configDescription;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $sortPriority;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcCidr;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'configDescription' => 'ConfigDescription',
        'configId' => 'ConfigId',
        'configName' => 'ConfigName',
        'regionId' => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'sortPriority' => 'SortPriority',
        'vSwitchId' => 'VSwitchId',
        'vpcCidr' => 'VpcCidr',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->sortPriority) {
            $res['SortPriority'] = $this->sortPriority;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcCidr) {
            $res['VpcCidr'] = $this->vpcCidr;
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
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SortPriority'])) {
            $model->sortPriority = $map['SortPriority'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcCidr'])) {
            $model->vpcCidr = $map['VpcCidr'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
