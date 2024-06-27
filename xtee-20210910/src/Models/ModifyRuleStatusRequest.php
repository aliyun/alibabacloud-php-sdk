<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class ModifyRuleStatusRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $applyUserId;

    /**
     * @var string
     */
    public $applyUserName;

    /**
     * @var string
     */
    public $auditRemark;

    /**
     * @var string
     */
    public $auditUserId;

    /**
     * @var string
     */
    public $auditUserName;

    /**
     * @var int
     */
    public $consoleRuleId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $ruleAuditType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleVersionId;
    protected $_name = [
        'lang'          => 'Lang',
        'applyUserId'   => 'applyUserId',
        'applyUserName' => 'applyUserName',
        'auditRemark'   => 'auditRemark',
        'auditUserId'   => 'auditUserId',
        'auditUserName' => 'auditUserName',
        'consoleRuleId' => 'consoleRuleId',
        'eventType'     => 'eventType',
        'regId'         => 'regId',
        'ruleAuditType' => 'ruleAuditType',
        'ruleId'        => 'ruleId',
        'ruleVersionId' => 'ruleVersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->applyUserId) {
            $res['applyUserId'] = $this->applyUserId;
        }
        if (null !== $this->applyUserName) {
            $res['applyUserName'] = $this->applyUserName;
        }
        if (null !== $this->auditRemark) {
            $res['auditRemark'] = $this->auditRemark;
        }
        if (null !== $this->auditUserId) {
            $res['auditUserId'] = $this->auditUserId;
        }
        if (null !== $this->auditUserName) {
            $res['auditUserName'] = $this->auditUserName;
        }
        if (null !== $this->consoleRuleId) {
            $res['consoleRuleId'] = $this->consoleRuleId;
        }
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->ruleAuditType) {
            $res['ruleAuditType'] = $this->ruleAuditType;
        }
        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }
        if (null !== $this->ruleVersionId) {
            $res['ruleVersionId'] = $this->ruleVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRuleStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['applyUserId'])) {
            $model->applyUserId = $map['applyUserId'];
        }
        if (isset($map['applyUserName'])) {
            $model->applyUserName = $map['applyUserName'];
        }
        if (isset($map['auditRemark'])) {
            $model->auditRemark = $map['auditRemark'];
        }
        if (isset($map['auditUserId'])) {
            $model->auditUserId = $map['auditUserId'];
        }
        if (isset($map['auditUserName'])) {
            $model->auditUserName = $map['auditUserName'];
        }
        if (isset($map['consoleRuleId'])) {
            $model->consoleRuleId = $map['consoleRuleId'];
        }
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['ruleAuditType'])) {
            $model->ruleAuditType = $map['ruleAuditType'];
        }
        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }
        if (isset($map['ruleVersionId'])) {
            $model->ruleVersionId = $map['ruleVersionId'];
        }

        return $model;
    }
}
