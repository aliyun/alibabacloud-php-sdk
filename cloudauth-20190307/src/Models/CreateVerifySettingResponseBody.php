<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateVerifySettingResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $stepList;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $solution;
    protected $_name = [
        'requestId' => 'RequestId',
        'stepList'  => 'StepList',
        'bizName'   => 'BizName',
        'bizType'   => 'BizType',
        'solution'  => 'Solution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stepList) {
            $res['StepList'] = $this->stepList;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StepList'])) {
            if (!empty($map['StepList'])) {
                $model->stepList = $map['StepList'];
            }
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        return $model;
    }
}
