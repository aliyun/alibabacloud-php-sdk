<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ActiveConfigRulesResponseBody\operateRuleResult;

use AlibabaCloud\Tea\Model;

class operateRuleItemList extends Model
{
    /**
     * @description The rule ID.
     *
     * @example cr-2da35180a8d1008e****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The error code returned if the request failed.
     *
     *   If the rule is enabled, no error code is returned.
     *   If the rule fails to be enabled, an error code is returned. For more information about error codes, see [Error codes](https://next.api.aliyun.com/document/Config/2020-09-07/errorCode).
     *
     * @example ConfigRuleStatusNotInActive
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Indicates whether the rule is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'configRuleId' => 'ConfigRuleId',
        'errorCode'    => 'ErrorCode',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateRuleItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
