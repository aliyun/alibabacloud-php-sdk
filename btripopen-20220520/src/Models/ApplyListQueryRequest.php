<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ApplyListQueryRequest extends Model
{
    /**
     * @var bool
     */
    public $allApply;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $onlyShangLvApply;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $unionNo;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'allApply'         => 'all_apply',
        'departId'         => 'depart_id',
        'endTime'          => 'end_time',
        'gmtModified'      => 'gmt_modified',
        'onlyShangLvApply' => 'only_shang_lv_apply',
        'page'             => 'page',
        'pageSize'         => 'page_size',
        'startTime'        => 'start_time',
        'type'             => 'type',
        'unionNo'          => 'union_no',
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
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->onlyShangLvApply) {
            $res['only_shang_lv_apply'] = $this->onlyShangLvApply;
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->unionNo) {
            $res['union_no'] = $this->unionNo;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyListQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all_apply'])) {
            $model->allApply = $map['all_apply'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['end_time'])) {
            $model->endTime = $map['end_time'];
        }
        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }
        if (isset($map['only_shang_lv_apply'])) {
            $model->onlyShangLvApply = $map['only_shang_lv_apply'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['union_no'])) {
            $model->unionNo = $map['union_no'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
