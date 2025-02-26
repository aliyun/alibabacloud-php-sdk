<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $endTimeMs;
    /**
     * @var string[]
     */
    public $instanceIds;
    /**
     * @var string[]
     */
    public $instanceStatus;
    /**
     * @var string
     */
    public $limit;
    /**
     * @var string
     */
    public $qualifier;
    /**
     * @var string
     */
    public $startKey;
    /**
     * @var int
     */
    public $startTimeMs;
    /**
     * @var bool
     */
    public $withAllActive;
    protected $_name = [
        'endTimeMs'      => 'endTimeMs',
        'instanceIds'    => 'instanceIds',
        'instanceStatus' => 'instanceStatus',
        'limit'          => 'limit',
        'qualifier'      => 'qualifier',
        'startKey'       => 'startKey',
        'startTimeMs'    => 'startTimeMs',
        'withAllActive'  => 'withAllActive',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->instanceStatus)) {
            Model::validateArray($this->instanceStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTimeMs) {
            $res['endTimeMs'] = $this->endTimeMs;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['instanceIds'] = [];
                $n1                 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['instanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceStatus) {
            if (\is_array($this->instanceStatus)) {
                $res['instanceStatus'] = [];
                $n1                    = 0;
                foreach ($this->instanceStatus as $item1) {
                    $res['instanceStatus'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->startKey) {
            $res['startKey'] = $this->startKey;
        }

        if (null !== $this->startTimeMs) {
            $res['startTimeMs'] = $this->startTimeMs;
        }

        if (null !== $this->withAllActive) {
            $res['withAllActive'] = $this->withAllActive;
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
        if (isset($map['endTimeMs'])) {
            $model->endTimeMs = $map['endTimeMs'];
        }

        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = [];
                $n1                 = 0;
                foreach ($map['instanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['instanceStatus'])) {
            if (!empty($map['instanceStatus'])) {
                $model->instanceStatus = [];
                $n1                    = 0;
                foreach ($map['instanceStatus'] as $item1) {
                    $model->instanceStatus[$n1++] = $item1;
                }
            }
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['startKey'])) {
            $model->startKey = $map['startKey'];
        }

        if (isset($map['startTimeMs'])) {
            $model->startTimeMs = $map['startTimeMs'];
        }

        if (isset($map['withAllActive'])) {
            $model->withAllActive = $map['withAllActive'];
        }

        return $model;
    }
}
