<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListSasContainerWebDefenseRuleResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListSasContainerWebDefenseRuleResponseBody\containerWebDefenseRuleList\pathConfDTOList;
use AlibabaCloud\Tea\Model;

class containerWebDefenseRuleList extends Model
{
    /**
     * @description The user ID.
     *
     * @example 1766185894104675
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The number of the applications.
     *
     * @example 10
     *
     * @var int
     */
    public $apptotalCount;

    /**
     * @description The creation time. Unit: milliseconds.
     *
     * @example 1698978109000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The timestamp when the alert event was last modified. Unit: milliseconds.
     *
     * @example 1678852686000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The ID of the rule.
     *
     * @example 420336648
     *
     * @var int
     */
    public $id;

    /**
     * @description The paths that are protected.
     *
     * @var pathConfDTOList[]
     */
    public $pathConfDTOList;

    /**
     * @description The name of the rule.
     *
     * @example test2
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $ruleStatus;
    protected $_name = [
        'aliUid'          => 'AliUid',
        'apptotalCount'   => 'ApptotalCount',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'pathConfDTOList' => 'PathConfDTOList',
        'ruleName'        => 'RuleName',
        'ruleStatus'      => 'RuleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->apptotalCount) {
            $res['ApptotalCount'] = $this->apptotalCount;
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
     * @return containerWebDefenseRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ApptotalCount'])) {
            $model->apptotalCount = $map['ApptotalCount'];
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
                $n                      = 0;
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
