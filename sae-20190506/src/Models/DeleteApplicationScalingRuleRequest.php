<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DeleteApplicationScalingRuleRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the trace. The ID is used to query the details of a request.
     *
     * @example timer-0800-2100
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
     * @return DeleteApplicationScalingRuleRequest
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
