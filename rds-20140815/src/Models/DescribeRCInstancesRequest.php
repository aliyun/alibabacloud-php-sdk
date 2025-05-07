<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeRCInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'hostIp' => 'HostIp',
        'instanceId' => 'InstanceId',
        'instanceIds' => 'InstanceIds',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'publicIp' => 'PublicIp',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tag' => 'Tag',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
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
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
