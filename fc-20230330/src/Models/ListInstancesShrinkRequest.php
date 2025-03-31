<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $endTimeMs;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $instanceStatusShrink;

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
        'endTimeMs' => 'endTimeMs',
        'instanceIdsShrink' => 'instanceIds',
        'instanceStatusShrink' => 'instanceStatus',
        'limit' => 'limit',
        'qualifier' => 'qualifier',
        'startKey' => 'startKey',
        'startTimeMs' => 'startTimeMs',
        'withAllActive' => 'withAllActive',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTimeMs) {
            $res['endTimeMs'] = $this->endTimeMs;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['instanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->instanceStatusShrink) {
            $res['instanceStatus'] = $this->instanceStatusShrink;
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
            $model->instanceIdsShrink = $map['instanceIds'];
        }

        if (isset($map['instanceStatus'])) {
            $model->instanceStatusShrink = $map['instanceStatus'];
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
