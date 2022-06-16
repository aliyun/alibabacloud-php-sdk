<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetFreeFlowUsageRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $curPageNum;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 查询月份
     *
     * @var string
     */
    public $month;

    /**
     * @description 每页的记录数量
     *
     * @var int
     */
    public $numPerPage;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'curPageNum' => 'CurPageNum',
        'instanceId' => 'InstanceId',
        'month'      => 'Month',
        'numPerPage' => 'NumPerPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->curPageNum) {
            $res['CurPageNum'] = $this->curPageNum;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->numPerPage) {
            $res['NumPerPage'] = $this->numPerPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFreeFlowUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CurPageNum'])) {
            $model->curPageNum = $map['CurPageNum'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['NumPerPage'])) {
            $model->numPerPage = $map['NumPerPage'];
        }

        return $model;
    }
}
