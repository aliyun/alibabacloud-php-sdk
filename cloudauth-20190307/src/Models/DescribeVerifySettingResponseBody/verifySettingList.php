<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySettingResponseBody;

use AlibabaCloud\Tea\Model;

class verifySettingList extends Model
{
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
    public $solution;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'stepList' => 'StepList',
        'bizName'  => 'BizName',
        'solution' => 'Solution',
        'bizType'  => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepList) {
            $res['StepList'] = $this->stepList;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return verifySettingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StepList'])) {
            if (!empty($map['StepList'])) {
                $model->stepList = $map['StepList'];
            }
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
