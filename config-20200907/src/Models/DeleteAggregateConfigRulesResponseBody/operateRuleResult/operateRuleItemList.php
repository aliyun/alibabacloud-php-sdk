<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateConfigRulesResponseBody\operateRuleResult;

use AlibabaCloud\Tea\Model;

class operateRuleItemList extends Model
{
    /**
     * @description The rule ID.
     *
     * @example cr-4e3d626622af0080****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The error code returned.
     *
     *   If the rule is deleted, no error code is returned.
     *   If the rule fails to be deleted, an error code is returned. For more information about error codes, see [Error codes](https://error-center.alibabacloud.com/status/product/Config).
     *
     * @example ConfigRuleCanNotDelete
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
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
