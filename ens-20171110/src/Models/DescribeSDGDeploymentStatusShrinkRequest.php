<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSDGDeploymentStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentType;

    /**
     * @var string
     */
    public $diskIdsShrink;

    /**
     * @var string
     */
    public $instanceIdsShrink;

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
    public $regionIdsShrink;

    /**
     * @var string
     */
    public $SDGId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'deploymentType' => 'DeploymentType',
        'diskIdsShrink' => 'DiskIds',
        'instanceIdsShrink' => 'InstanceIds',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionIdsShrink' => 'RegionIds',
        'SDGId' => 'SDGId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentType) {
            $res['DeploymentType'] = $this->deploymentType;
        }

        if (null !== $this->diskIdsShrink) {
            $res['DiskIds'] = $this->diskIdsShrink;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
        }

        if (null !== $this->SDGId) {
            $res['SDGId'] = $this->SDGId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DeploymentType'])) {
            $model->deploymentType = $map['DeploymentType'];
        }

        if (isset($map['DiskIds'])) {
            $model->diskIdsShrink = $map['DiskIds'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
        }

        if (isset($map['SDGId'])) {
            $model->SDGId = $map['SDGId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
