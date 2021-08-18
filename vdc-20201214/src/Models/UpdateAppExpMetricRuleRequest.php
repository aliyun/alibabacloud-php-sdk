<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppExpMetricRuleRequest extends Model
{
    /**
     * @description 具体规则，JSON格式
     *
     * @var string
     */
    public $rule;

    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'rule'  => 'Rule',
        'appId' => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppExpMetricRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
