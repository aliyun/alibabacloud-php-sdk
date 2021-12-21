<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppFollowCallRuleRequest extends Model
{
    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 具体规则，JSON格式
     *
     * @var string
     */
    public $rule;
    protected $_name = [
        'appId' => 'AppId',
        'rule'  => 'Rule',
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
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppFollowCallRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
