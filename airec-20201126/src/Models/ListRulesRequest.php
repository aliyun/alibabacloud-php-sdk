<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListRulesRequest extends Model
{
    /**
     * @example 1567584765
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example selection
     *
     * @var string
     */
    public $ruleType;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 1567584765
     *
     * @var int
     */
    public $startTime;

    /**
     * @example EFFECTIVE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'   => 'endTime',
        'page'      => 'page',
        'ruleType'  => 'ruleType',
        'sceneId'   => 'sceneId',
        'size'      => 'size',
        'startTime' => 'startTime',
        'status'    => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
