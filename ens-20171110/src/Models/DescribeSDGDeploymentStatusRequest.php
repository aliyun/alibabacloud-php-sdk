<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSDGDeploymentStatusRequest extends Model
{
    /**
     * @var string
     */
    public $deploymentType;

    /**
     * @var string[]
     */
    public $diskIds;

    /**
     * @var string[]
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
     * @var string[]
     */
    public $regionIds;

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
        'diskIds' => 'DiskIds',
        'instanceIds' => 'InstanceIds',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionIds' => 'RegionIds',
        'SDGId' => 'SDGId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->diskIds)) {
            Model::validateArray($this->diskIds);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentType) {
            $res['DeploymentType'] = $this->deploymentType;
        }

        if (null !== $this->diskIds) {
            if (\is_array($this->diskIds)) {
                $res['DiskIds'] = [];
                $n1 = 0;
                foreach ($this->diskIds as $item1) {
                    $res['DiskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1 = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DiskIds'])) {
                $model->diskIds = [];
                $n1 = 0;
                foreach ($map['DiskIds'] as $item1) {
                    $model->diskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1 = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
