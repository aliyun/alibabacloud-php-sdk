<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class StartBackToBackCallRequest extends Model
{
    /**
     * @example 20211203180209000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example test
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 02131584184
     *
     * @var string
     */
    public $callCenterNumber;

    /**
     * @example 13162828888
     *
     * @var string
     */
    public $caller;

    /**
     * @example mobile1
     *
     * @var string
     */
    public $mobileKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $skillType;
    protected $_name = [
        'bizId'            => 'BizId',
        'bizType'          => 'BizType',
        'callCenterNumber' => 'CallCenterNumber',
        'caller'           => 'Caller',
        'mobileKey'        => 'MobileKey',
        'skillType'        => 'SkillType',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->callCenterNumber) {
            $res['CallCenterNumber'] = $this->callCenterNumber;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->mobileKey) {
            $res['MobileKey'] = $this->mobileKey;
        }
        if (null !== $this->skillType) {
            $res['SkillType'] = $this->skillType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartBackToBackCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CallCenterNumber'])) {
            $model->callCenterNumber = $map['CallCenterNumber'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['MobileKey'])) {
            $model->mobileKey = $map['MobileKey'];
        }
        if (isset($map['SkillType'])) {
            $model->skillType = $map['SkillType'];
        }

        return $model;
    }
}
