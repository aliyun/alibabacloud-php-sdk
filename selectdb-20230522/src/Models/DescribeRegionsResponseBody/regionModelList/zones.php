<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeRegionsResponseBody\regionModelList;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The zone description.
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the VPC is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The label.
     *
     * @example test
     *
     * @var string
     */
    public $label;

    /**
     * @description The zone name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The subdomain.
     *
     * @example cn-beijing-h-aliyun
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description Indicates whether the VPC is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $vpcEnabled;

    /**
     * @description Indicates whether the virtual private cloud (VPC) is available.
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'description' => 'Description',
        'disabled' => 'Disabled',
        'label' => 'Label',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'subDomain' => 'SubDomain',
        'vpcEnabled' => 'VpcEnabled',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->vpcEnabled) {
            $res['VpcEnabled'] = $this->vpcEnabled;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['VpcEnabled'])) {
            $model->vpcEnabled = $map['VpcEnabled'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
