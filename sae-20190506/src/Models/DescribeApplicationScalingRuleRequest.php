<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationScalingRuleRequest extends Model
{
    /**
     * @description a0d2e04c-159d-40a8-b240-d2f2c263\\*\\*\\*\\*
     *
     * This parameter is required.
     * @example a0d2e04c-159d-40a8-b240-d2f2c263****
     *
     * @var string
     */
    public $appId;

    /**
     * @description test
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $scalingRuleName;
    protected $_name = [
        'appId'           => 'AppId',
        'scalingRuleName' => 'ScalingRuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }

        return $model;
    }
}
