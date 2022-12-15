<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainOrderListQueryRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $allApply;

    /**
     * @example 11657
     *
     * @var int
     */
    public $applyId;

    /**
     * @var string
     */
    public $departId;

    /**
     * @example 2022-05-15 22:27:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $page;

    /**
     * @example 25
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2022-05-15 22:27:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example CS-EDES9898
     *
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @example 2022-05-15 22:27:00
     *
     * @var string
     */
    public $updateEndTime;

    /**
     * @example 2022-05-15 22:27:00
     *
     * @var string
     */
    public $updateStartTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'allApply'         => 'all_apply',
        'applyId'          => 'apply_id',
        'departId'         => 'depart_id',
        'endTime'          => 'end_time',
        'page'             => 'page',
        'pageSize'         => 'page_size',
        'startTime'        => 'start_time',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'updateEndTime'    => 'update_end_time',
        'updateStartTime'  => 'update_start_time',
        'userId'           => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allApply) {
            $res['all_apply'] = $this->allApply;
        }
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }
        if (null !== $this->updateEndTime) {
            $res['update_end_time'] = $this->updateEndTime;
        }
        if (null !== $this->updateStartTime) {
            $res['update_start_time'] = $this->updateStartTime;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainOrderListQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all_apply'])) {
            $model->allApply = $map['all_apply'];
        }
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['start_time'])) {
            $model->startTime = $map['start_time'];
        }
        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }
        if (isset($map['update_end_time'])) {
            $model->updateEndTime = $map['update_end_time'];
        }
        if (isset($map['update_start_time'])) {
            $model->updateStartTime = $map['update_start_time'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
