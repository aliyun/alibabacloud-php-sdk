<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\ListUserProduceOperateLogsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example P20210928095324000002
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 10
     *
     * @var int
     */
    public $bizStatus;

    /**
     * @example esp.wangwen
     *
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $operateName;

    /**
     * @example 1695324000002
     *
     * @var int
     */
    public $operateTime;

    /**
     * @example user
     *
     * @var string
     */
    public $operateUserType;

    /**
     * @example 35
     *
     * @var int
     */
    public $toBizStatus;
    protected $_name = [
        'bizId'           => 'BizId',
        'bizStatus'       => 'BizStatus',
        'bizType'         => 'BizType',
        'note'            => 'Note',
        'operateName'     => 'OperateName',
        'operateTime'     => 'OperateTime',
        'operateUserType' => 'OperateUserType',
        'toBizStatus'     => 'ToBizStatus',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->operateName) {
            $res['OperateName'] = $this->operateName;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operateUserType) {
            $res['OperateUserType'] = $this->operateUserType;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['OperateName'])) {
            $model->operateName = $map['OperateName'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['OperateUserType'])) {
            $model->operateUserType = $map['OperateUserType'];
        }
        if (isset($map['ToBizStatus'])) {
            $model->toBizStatus = $map['ToBizStatus'];
        }

        return $model;
    }
}
