<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddCheckResultWhiteListRequest extends Model
{
    /**
     * @description The IDs of the check items.
     *
     * >  You can call the [ListCheckResult](~~ListCheckResult~~) operation to query the IDs of the check items.
     *
     * @var int[]
     */
    public $checkIds;

    /**
     * @description The description. The value of this parameter can be up to 65,535 bytes in length.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The type of the rule. Default value: **WHITE**. Valid value:
     *
     *   **WHITE**: Add check items to the whitelist.
     *
     * @example WHITE
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'checkIds' => 'CheckIds',
        'remark' => 'Remark',
        'ruleType' => 'RuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCheckResultWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckIds'])) {
            if (!empty($map['CheckIds'])) {
                $model->checkIds = $map['CheckIds'];
            }
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
