<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeDataDistResultRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $dataNames;

    /**
     * @var string
     */
    public $dataVersions;

    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $maxDate;

    /**
     * @var string
     */
    public $minDate;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appId' => 'AppId',
        'dataNames' => 'DataNames',
        'dataVersions' => 'DataVersions',
        'ensRegionIds' => 'EnsRegionIds',
        'instanceIds' => 'InstanceIds',
        'maxDate' => 'MaxDate',
        'minDate' => 'MinDate',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegionIds)) {
            Model::validateArray($this->ensRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->dataNames) {
            $res['DataNames'] = $this->dataNames;
        }

        if (null !== $this->dataVersions) {
            $res['DataVersions'] = $this->dataVersions;
        }

        if (null !== $this->ensRegionIds) {
            if (\is_array($this->ensRegionIds)) {
                $res['EnsRegionIds'] = [];
                $n1 = 0;
                foreach ($this->ensRegionIds as $item1) {
                    $res['EnsRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }

        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DataNames'])) {
            $model->dataNames = $map['DataNames'];
        }

        if (isset($map['DataVersions'])) {
            $model->dataVersions = $map['DataVersions'];
        }

        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = [];
                $n1 = 0;
                foreach ($map['EnsRegionIds'] as $item1) {
                    $model->ensRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }

        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
