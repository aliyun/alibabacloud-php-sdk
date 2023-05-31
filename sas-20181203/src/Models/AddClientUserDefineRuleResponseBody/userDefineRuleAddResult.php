<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddClientUserDefineRuleResponseBody;

use AlibabaCloud\Tea\Model;

class userDefineRuleAddResult extends Model
{
    /**
     * @description The ID of the rule.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The type of the operating system. Valid values:
     *
     *   **windows**: Windows
     *   **linux**: Linux
     *   **all**: all types
     *
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The switch ID of the custom defense rule.
     *
     * @example USER-DEFINE-RULE-SWITCH-TYPE_200****
     *
     * @var string
     */
    public $switchId;
    protected $_name = [
        'id'       => 'Id',
        'platform' => 'Platform',
        'switchId' => 'SwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userDefineRuleAddResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        return $model;
    }
}
