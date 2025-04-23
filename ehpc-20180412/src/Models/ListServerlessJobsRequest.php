<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class ListServerlessJobsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $jobIds;

    /**
     * @var string[]
     */
    public $jobNames;

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
    public $regionId;

    /**
     * @var string
     */
    public $startOrder;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $submitOrder;

    /**
     * @var string
     */
    public $submitTimeEnd;

    /**
     * @var string
     */
    public $submitTimeStart;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'jobIds' => 'JobIds',
        'jobNames' => 'JobNames',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'startOrder' => 'StartOrder',
        'state' => 'State',
        'submitOrder' => 'SubmitOrder',
        'submitTimeEnd' => 'SubmitTimeEnd',
        'submitTimeStart' => 'SubmitTimeStart',
    ];

    public function validate()
    {
        if (\is_array($this->jobIds)) {
            Model::validateArray($this->jobIds);
        }
        if (\is_array($this->jobNames)) {
            Model::validateArray($this->jobNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->jobIds) {
            if (\is_array($this->jobIds)) {
                $res['JobIds'] = [];
                $n1 = 0;
                foreach ($this->jobIds as $item1) {
                    $res['JobIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->jobNames) {
            if (\is_array($this->jobNames)) {
                $res['JobNames'] = [];
                $n1 = 0;
                foreach ($this->jobNames as $item1) {
                    $res['JobNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startOrder) {
            $res['StartOrder'] = $this->startOrder;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->submitOrder) {
            $res['SubmitOrder'] = $this->submitOrder;
        }

        if (null !== $this->submitTimeEnd) {
            $res['SubmitTimeEnd'] = $this->submitTimeEnd;
        }

        if (null !== $this->submitTimeStart) {
            $res['SubmitTimeStart'] = $this->submitTimeStart;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = [];
                $n1 = 0;
                foreach ($map['JobIds'] as $item1) {
                    $model->jobIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['JobNames'])) {
            if (!empty($map['JobNames'])) {
                $model->jobNames = [];
                $n1 = 0;
                foreach ($map['JobNames'] as $item1) {
                    $model->jobNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartOrder'])) {
            $model->startOrder = $map['StartOrder'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubmitOrder'])) {
            $model->submitOrder = $map['SubmitOrder'];
        }

        if (isset($map['SubmitTimeEnd'])) {
            $model->submitTimeEnd = $map['SubmitTimeEnd'];
        }

        if (isset($map['SubmitTimeStart'])) {
            $model->submitTimeStart = $map['SubmitTimeStart'];
        }

        return $model;
    }
}
