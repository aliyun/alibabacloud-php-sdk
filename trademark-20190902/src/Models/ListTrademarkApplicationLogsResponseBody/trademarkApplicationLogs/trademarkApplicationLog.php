<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkApplicationLogsResponseBody\trademarkApplicationLogs;

use AlibabaCloud\Tea\Model;

class trademarkApplicationLog extends Model
{
    /**
     * @example trademark_register-cn-78v1a67zy01
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 0
     *
     * @var int
     */
    public $bizStatus;

    /**
     * @var string
     */
    public $note;

    /**
     * @example 1568632960000
     *
     * @var int
     */
    public $operateTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $operateType;
    protected $_name = [
        'bizId'       => 'BizId',
        'bizStatus'   => 'BizStatus',
        'note'        => 'Note',
        'operateTime' => 'OperateTime',
        'operateType' => 'OperateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademarkApplicationLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        return $model;
    }
}
