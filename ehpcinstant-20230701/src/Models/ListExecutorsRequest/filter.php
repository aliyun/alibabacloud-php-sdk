<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListExecutorsRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string[]
     */
    public $ipAddresses;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string[]
     */
    public $status;

    /**
     * @var int
     */
    public $timeCreatedAfter;

    /**
     * @var int
     */
    public $timeCreatedBefore;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'executorIds' => 'ExecutorIds',
        'image' => 'Image',
        'ipAddresses' => 'IpAddresses',
        'jobName' => 'JobName',
        'status' => 'Status',
        'timeCreatedAfter' => 'TimeCreatedAfter',
        'timeCreatedBefore' => 'TimeCreatedBefore',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        if (\is_array($this->executorIds)) {
            Model::validateArray($this->executorIds);
        }
        if (\is_array($this->ipAddresses)) {
            Model::validateArray($this->ipAddresses);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['ExecutorIds'] = [];
                $n1 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['ExecutorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->ipAddresses) {
            if (\is_array($this->ipAddresses)) {
                $res['IpAddresses'] = [];
                $n1 = 0;
                foreach ($this->ipAddresses as $item1) {
                    $res['IpAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeCreatedAfter) {
            $res['TimeCreatedAfter'] = $this->timeCreatedAfter;
        }

        if (null !== $this->timeCreatedBefore) {
            $res['TimeCreatedBefore'] = $this->timeCreatedBefore;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = [];
                $n1 = 0;
                foreach ($map['ExecutorIds'] as $item1) {
                    $model->executorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['IpAddresses'])) {
            if (!empty($map['IpAddresses'])) {
                $model->ipAddresses = [];
                $n1 = 0;
                foreach ($map['IpAddresses'] as $item1) {
                    $model->ipAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeCreatedAfter'])) {
            $model->timeCreatedAfter = $map['TimeCreatedAfter'];
        }

        if (isset($map['TimeCreatedBefore'])) {
            $model->timeCreatedBefore = $map['TimeCreatedBefore'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
