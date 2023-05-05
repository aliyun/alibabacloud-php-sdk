<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ApplyListQueryRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allApply;

    /**
     * @example dept1
     *
     * @var string
     */
    public $departId;

    /**
     * @example 2017-05-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2018-05-01 00:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example false
     *
     * @var bool
     */
    public $onlyShangLvApply;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2017-05-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 子企业Id
     *
     * @example btrip123
     *
     * @var string
     */
    public $subCorpId;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;

    /**
     * @example abs123
     *
     * @var string
     */
    public $unionNo;

    /**
     * @example user1
     *
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
        'subCorpId'        => 'sub_corp_id',
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
        if (null !== $this->subCorpId) {
            $res['sub_corp_id'] = $this->subCorpId;
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
        if (isset($map['sub_corp_id'])) {
            $model->subCorpId = $map['sub_corp_id'];
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
