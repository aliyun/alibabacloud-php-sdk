<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySettingResponseBody;

use AlibabaCloud\Tea\Model;

class verifySettingList extends Model
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
    public $solution;

    /**
     * @var string[]
     */
    public $stepList;
    protected $_name = [
        'bizName'  => 'BizName',
        'bizType'  => 'BizType',
        'solution' => 'Solution',
        'stepList' => 'StepList',
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
     * @return verifySettingList
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
