<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateVerifySettingResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizName;

    /**
     * @example UserRegister
     *
     * @var string
     */
    public $bizType;

    /**
     * @example D6163397-15C5-419C-9ACC-B7C83E0B4C10
     *
     * @var string
     */
    public $requestId;

    /**
     * @example RPBasic
     *
     * @var string
     */
    public $solution;

    /**
     * @var string[]
     */
    public $stepList;
    protected $_name = [
        'bizName'   => 'BizName',
        'bizType'   => 'BizType',
        'requestId' => 'RequestId',
        'solution'  => 'Solution',
        'stepList'  => 'StepList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->stepList) {
            $res['StepList'] = $this->stepList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVerifySettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['StepList'])) {
            if (!empty($map['StepList'])) {
                $model->stepList = $map['StepList'];
            }
        }

        return $model;
    }
}
