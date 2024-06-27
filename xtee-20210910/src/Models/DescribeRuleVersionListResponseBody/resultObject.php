<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleVersionListResponseBody;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleVersionListResponseBody\resultObject\consoleAudit;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var consoleAudit
     */
    public $consoleAudit;

    /**
     * @var int
     */
    public $consoleRuleId;

    /**
     * @var string
     */
    public $consoleRuleMemo;

    /**
     * @var string
     */
    public $consoleRuleName;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventType;

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
     * @var string
     */
    public $lastOperator;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'consoleAudit'    => 'consoleAudit',
        'consoleRuleId'   => 'consoleRuleId',
        'consoleRuleMemo' => 'consoleRuleMemo',
        'consoleRuleName' => 'consoleRuleName',
        'eventCode'       => 'eventCode',
        'eventType'       => 'eventType',
        'gmtCreate'       => 'gmtCreate',
        'gmtModified'     => 'gmtModified',
        'id'              => 'id',
        'lastOperator'    => 'lastOperator',
        'priority'        => 'priority',
        'ruleId'          => 'ruleId',
        'ruleStatus'      => 'ruleStatus',
        'version'         => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleAudit) {
            $res['consoleAudit'] = null !== $this->consoleAudit ? $this->consoleAudit->toMap() : null;
        }
        if (null !== $this->consoleRuleId) {
            $res['consoleRuleId'] = $this->consoleRuleId;
        }
        if (null !== $this->consoleRuleMemo) {
            $res['consoleRuleMemo'] = $this->consoleRuleMemo;
        }
        if (null !== $this->consoleRuleName) {
            $res['consoleRuleName'] = $this->consoleRuleName;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->lastOperator) {
            $res['lastOperator'] = $this->lastOperator;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consoleAudit'])) {
            $model->consoleAudit = consoleAudit::fromMap($map['consoleAudit']);
        }
        if (isset($map['consoleRuleId'])) {
            $model->consoleRuleId = $map['consoleRuleId'];
        }
        if (isset($map['consoleRuleMemo'])) {
            $model->consoleRuleMemo = $map['consoleRuleMemo'];
        }
        if (isset($map['consoleRuleName'])) {
            $model->consoleRuleName = $map['consoleRuleName'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['lastOperator'])) {
            $model->lastOperator = $map['lastOperator'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
