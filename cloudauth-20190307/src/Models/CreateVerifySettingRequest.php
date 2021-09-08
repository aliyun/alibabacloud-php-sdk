<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateVerifySettingRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $solution;

    /**
     * @var bool
     */
    public $guideStep;

    /**
     * @var bool
     */
    public $privacyStep;

    /**
     * @var bool
     */
    public $resultStep;
    protected $_name = [
        'bizType'     => 'BizType',
        'bizName'     => 'BizName',
        'solution'    => 'Solution',
        'guideStep'   => 'GuideStep',
        'privacyStep' => 'PrivacyStep',
        'resultStep'  => 'ResultStep',
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
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
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

        return $model;
    }
}
