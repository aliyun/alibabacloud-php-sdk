<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetSasContainerWebDefenseRuleResponseBody\containerWebDefenseRule\pathConfDTOList;

class containerWebDefenseRule extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $appTotalCount;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var pathConfDTOList[]
     */
    public $pathConfDTOList;

    /**
     * @var string
     */
    public $ruleName;

    /**
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

    public function validate()
    {
        if (\is_array($this->pathConfDTOList)) {
            Model::validateArray($this->pathConfDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->pathConfDTOList)) {
                $res['PathConfDTOList'] = [];
                $n1 = 0;
                foreach ($this->pathConfDTOList as $item1) {
                    $res['PathConfDTOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['PathConfDTOList'] as $item1) {
                    $model->pathConfDTOList[$n1] = pathConfDTOList::fromMap($item1);
                    ++$n1;
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
