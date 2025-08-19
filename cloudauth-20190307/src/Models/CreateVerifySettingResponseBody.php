<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class CreateVerifySettingResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var string[]
     */
    public $stepList;
    protected $_name = [
        'bizName' => 'BizName',
        'bizType' => 'BizType',
        'requestId' => 'RequestId',
        'solution' => 'Solution',
        'stepList' => 'StepList',
    ];

    public function validate()
    {
        if (\is_array($this->stepList)) {
            Model::validateArray($this->stepList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->stepList)) {
                $res['StepList'] = [];
                $n1 = 0;
                foreach ($this->stepList as $item1) {
                    $res['StepList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->stepList = [];
                $n1 = 0;
                foreach ($map['StepList'] as $item1) {
                    $model->stepList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
