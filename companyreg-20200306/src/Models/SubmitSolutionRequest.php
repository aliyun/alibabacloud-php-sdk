<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class SubmitSolutionRequest extends Model
{
    /**
     * @example esp.wangwen
     *
     * @var string
     */
    public $bizType;

    /**
     * @example I20211223101045000001
     *
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $solution;

    /**
     * @example 1219541161213057
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizType'        => 'BizType',
        'intentionBizId' => 'IntentionBizId',
        'operateType'    => 'OperateType',
        'solution'       => 'Solution',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSolutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
