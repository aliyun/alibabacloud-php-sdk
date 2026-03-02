<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListServiceMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $intervalInSec;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $measures;

    /**
     * @var int
     */
    public $serviceGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $topicId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime' => 'endTime',
        'env' => 'env',
        'groupId' => 'groupId',
        'intervalInSec' => 'intervalInSec',
        'ip' => 'ip',
        'measures' => 'measures',
        'serviceGroupId' => 'serviceGroupId',
        'startTime' => 'startTime',
        'topicId' => 'topicId',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->intervalInSec) {
            $res['intervalInSec'] = $this->intervalInSec;
        }

        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        if (null !== $this->measures) {
            $res['measures'] = $this->measures;
        }

        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->topicId) {
            $res['topicId'] = $this->topicId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['intervalInSec'])) {
            $model->intervalInSec = $map['intervalInSec'];
        }

        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        if (isset($map['measures'])) {
            $model->measures = $map['measures'];
        }

        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['topicId'])) {
            $model->topicId = $map['topicId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
