<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $bizStatus;

    /**
     * @var string
     */
    public $extendContent;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var int
     */
    public $operateType;

    /**
     * @var int
     */
    public $toBizStatus;
    protected $_name = [
        'bizId'         => 'BizId',
        'bizStatus'     => 'BizStatus',
        'extendContent' => 'ExtendContent',
        'note'          => 'Note',
        'operateTime'   => 'OperateTime',
        'operateType'   => 'OperateType',
        'toBizStatus'   => 'ToBizStatus',
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
        if (null !== $this->extendContent) {
            $res['ExtendContent'] = $this->extendContent;
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
        if (null !== $this->toBizStatus) {
            $res['ToBizStatus'] = $this->toBizStatus;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizStatus'])) {
            $model->bizStatus = $map['BizStatus'];
        }
        if (isset($map['ExtendContent'])) {
            $model->extendContent = $map['ExtendContent'];
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
        if (isset($map['ToBizStatus'])) {
            $model->toBizStatus = $map['ToBizStatus'];
        }

        return $model;
    }
}
