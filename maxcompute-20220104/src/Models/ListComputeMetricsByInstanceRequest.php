<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class ListComputeMetricsByInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobOwner;

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
    public $projectNames;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string[]
     */
    public $specCodes;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string[]
     */
    public $types;
    protected $_name = [
        'endDate' => 'endDate',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'projectNames' => 'projectNames',
        'region' => 'region',
        'signature' => 'signature',
        'specCodes' => 'specCodes',
        'startDate' => 'startDate',
        'types' => 'types',
    ];

    public function validate()
    {
        if (\is_array($this->projectNames)) {
            Model::validateArray($this->projectNames);
        }
        if (\is_array($this->specCodes)) {
            Model::validateArray($this->specCodes);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->projectNames) {
            if (\is_array($this->projectNames)) {
                $res['projectNames'] = [];
                $n1 = 0;
                foreach ($this->projectNames as $item1) {
                    $res['projectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->specCodes) {
            if (\is_array($this->specCodes)) {
                $res['specCodes'] = [];
                $n1 = 0;
                foreach ($this->specCodes as $item1) {
                    $res['specCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['types'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['projectNames'])) {
            if (!empty($map['projectNames'])) {
                $model->projectNames = [];
                $n1 = 0;
                foreach ($map['projectNames'] as $item1) {
                    $model->projectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['specCodes'])) {
            if (!empty($map['specCodes'])) {
                $model->specCodes = [];
                $n1 = 0;
                foreach ($map['specCodes'] as $item1) {
                    $model->specCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['types'])) {
            if (!empty($map['types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['types'] as $item1) {
                    $model->types[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
