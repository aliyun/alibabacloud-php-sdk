<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var int
     */
    public $operateType;

    /**
     * @var string
     */
    public $extendContent;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $bizStatus;
    protected $_name = [
        'operateTime'   => 'OperateTime',
        'operateType'   => 'OperateType',
        'extendContent' => 'ExtendContent',
        'bizId'         => 'BizId',
        'note'          => 'Note',
        'bizStatus'     => 'BizStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->extendContent) {
            $res['ExtendContent'] = $this->extendContent;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->bizStatus) {
            $res['BizStatus'] = $this->bizStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['ExtendContent'])) {
            $model->extendContent = $map['ExtendContent'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }

        return $model;
    }
}
