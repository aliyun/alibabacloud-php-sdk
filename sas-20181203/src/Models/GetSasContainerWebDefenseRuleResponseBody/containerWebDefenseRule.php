<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleResponseBody\containerWebDefenseRule\pathConfDTOList;
use AlibabaCloud\Tea\Model;

class containerWebDefenseRule extends Model
{
    /**
     * @description User ID.
     *
     * @example 1000**0002
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description Total number of applications.
     *
     * @example 1
     *
     * @var int
     */
    public $appTotalCount;

    /**
     * @description Timestamp when the rule was created. Unit: milliseconds.
     *
     * @example 1709173360000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description Timestamp when the rule was last modified. Unit: milliseconds.
     *
     * @example 1655432638000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description Rule ID.
     *
     * @example 100
     *
     * @var int
     */
    public $id;

    /**
     * @description List of configured file paths.
     *
     * @var pathConfDTOList[]
     */
    public $pathConfDTOList;

    /**
     * @description Rule name.
     *
     * @example FiledefenseRule.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Rule status. The value descriptions are as follows:
     *
     * - **1**: Enabled
     * - **0**: Disabled
     *
     * @example 1
     *
     * @var int
     */
    public $ruleStatus;
    protected $_name = [
        'aliUid' => 'AliUid',
        'appTotalCount' => 'AppTotalCount',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'pathConfDTOList' => 'PathConfDTOList',
        'ruleName' => 'RuleName',
        'ruleStatus' => 'RuleStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->appTotalCount) {
            $res['AppTotalCount'] = $this->appTotalCount;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pathConfDTOList) {
            $res['PathConfDTOList'] = [];
            if (null !== $this->pathConfDTOList && \is_array($this->pathConfDTOList)) {
                $n = 0;
                foreach ($this->pathConfDTOList as $item) {
                    $res['PathConfDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerWebDefenseRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AppTotalCount'])) {
            $model->appTotalCount = $map['AppTotalCount'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PathConfDTOList'])) {
            if (!empty($map['PathConfDTOList'])) {
                $model->pathConfDTOList = [];
                $n = 0;
                foreach ($map['PathConfDTOList'] as $item) {
                    $model->pathConfDTOList[$n++] = null !== $item ? pathConfDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        return $model;
    }
}
