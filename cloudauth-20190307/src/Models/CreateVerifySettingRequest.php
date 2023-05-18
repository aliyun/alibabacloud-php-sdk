<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateVerifySettingRequest extends Model
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
     * @example false
     *
     * @var bool
     */
    public $guideStep;

    /**
     * @example true
     *
     * @var bool
     */
    public $privacyStep;

    /**
     * @example false
     *
     * @var bool
     */
    public $resultStep;

    /**
     * @example RPBasic
     *
     * @var string
     */
    public $solution;
    protected $_name = [
        'bizName'     => 'BizName',
        'bizType'     => 'BizType',
        'guideStep'   => 'GuideStep',
        'privacyStep' => 'PrivacyStep',
        'resultStep'  => 'ResultStep',
        'solution'    => 'Solution',
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
        if (null !== $this->guideStep) {
            $res['GuideStep'] = $this->guideStep;
        }
        if (null !== $this->privacyStep) {
            $res['PrivacyStep'] = $this->privacyStep;
        }
        if (null !== $this->resultStep) {
            $res['ResultStep'] = $this->resultStep;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVerifySettingRequest
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
        if (isset($map['GuideStep'])) {
            $model->guideStep = $map['GuideStep'];
        }
        if (isset($map['PrivacyStep'])) {
            $model->privacyStep = $map['PrivacyStep'];
        }
        if (isset($map['ResultStep'])) {
            $model->resultStep = $map['ResultStep'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }

        return $model;
    }
}
