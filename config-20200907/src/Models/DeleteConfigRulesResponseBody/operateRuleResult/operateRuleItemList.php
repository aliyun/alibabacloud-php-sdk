<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteConfigRulesResponseBody\operateRuleResult;

use AlibabaCloud\Tea\Model;

class operateRuleItemList extends Model
{
    /**
     * @description The rule ID.
     *
     * @example cr-9908626622af0035****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The error code.
     *
     *   If the rule is disabled, no error code is returned.
     *   If the rule fails to be disabled, an error code is returned. For more information about error codes, see [Error codes](https://api.alibabacloud.com/document/Config/2020-09-07/errorCode).
     *
     * @example ConfigRuleCanNotDelete
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example false
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
