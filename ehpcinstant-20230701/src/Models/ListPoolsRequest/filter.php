<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListPoolsRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string[]
     */
    public $poolName;

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
    protected $_name = [
        'poolName' => 'PoolName',
        'status' => 'Status',
        'timeCreatedAfter' => 'TimeCreatedAfter',
        'timeCreatedBefore' => 'TimeCreatedBefore',
    ];

    public function validate()
    {
        if (\is_array($this->poolName)) {
            Model::validateArray($this->poolName);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->poolName) {
            if (\is_array($this->poolName)) {
                $res['PoolName'] = [];
                $n1 = 0;
                foreach ($this->poolName as $item1) {
                    $res['PoolName'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PoolName'])) {
            if (!empty($map['PoolName'])) {
                $model->poolName = [];
                $n1 = 0;
                foreach ($map['PoolName'] as $item1) {
                    $model->poolName[$n1] = $item1;
                    ++$n1;
                }
            }
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

        return $model;
    }
}
