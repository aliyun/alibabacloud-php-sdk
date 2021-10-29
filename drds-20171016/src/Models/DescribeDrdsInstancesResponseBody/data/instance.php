<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesResponseBody\data;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesResponseBody\data\instance\slaveInstId;
use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesResponseBody\data\instance\vips;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $instRole;

    /**
     * @var string
     */
    public $masterInstId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var slaveInstId
     */
    public $slaveInstId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $version;

    /**
     * @var vips
     */
    public $vips;

    /**
     * @var string
     */
    public $vpcCloudInstanceId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'description'        => 'Description',
        'drdsInstanceId'     => 'DrdsInstanceId',
        'instRole'           => 'InstRole',
        'masterInstId'       => 'MasterInstId',
        'networkType'        => 'NetworkType',
        'regionId'           => 'RegionId',
        'slaveInstId'        => 'SlaveInstId',
        'status'             => 'Status',
        'type'               => 'Type',
        'version'            => 'Version',
        'vips'               => 'Vips',
        'vpcCloudInstanceId' => 'VpcCloudInstanceId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->instRole) {
            $res['InstRole'] = $this->instRole;
        }
        if (null !== $this->masterInstId) {
            $res['MasterInstId'] = $this->masterInstId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->slaveInstId) {
            $res['SlaveInstId'] = null !== $this->slaveInstId ? $this->slaveInstId->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vips) {
            $res['Vips'] = null !== $this->vips ? $this->vips->toMap() : null;
        }
        if (null !== $this->vpcCloudInstanceId) {
            $res['VpcCloudInstanceId'] = $this->vpcCloudInstanceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['InstRole'])) {
            $model->instRole = $map['InstRole'];
        }
        if (isset($map['MasterInstId'])) {
            $model->masterInstId = $map['MasterInstId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SlaveInstId'])) {
            $model->slaveInstId = slaveInstId::fromMap($map['SlaveInstId']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Vips'])) {
            $model->vips = vips::fromMap($map['Vips']);
        }
        if (isset($map['VpcCloudInstanceId'])) {
            $model->vpcCloudInstanceId = $map['VpcCloudInstanceId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
