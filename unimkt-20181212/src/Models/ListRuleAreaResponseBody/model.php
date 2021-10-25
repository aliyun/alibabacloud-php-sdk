<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\ListRuleAreaResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $adSlotId;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $mediaName;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $adSlotName;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'status'     => 'Status',
        'ruleType'   => 'RuleType',
        'adSlotId'   => 'AdSlotId',
        'recordId'   => 'RecordId',
        'mediaName'  => 'MediaName',
        'mediaId'    => 'MediaId',
        'adSlotName' => 'AdSlotName',
        'ruleId'     => 'RuleId',
        'ruleName'   => 'RuleName',
        'tenantId'   => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->adSlotId) {
            $res['AdSlotId'] = $this->adSlotId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->mediaName) {
            $res['MediaName'] = $this->mediaName;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->adSlotName) {
            $res['AdSlotName'] = $this->adSlotName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['AdSlotId'])) {
            $model->adSlotId = $map['AdSlotId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['MediaName'])) {
            $model->mediaName = $map['MediaName'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['AdSlotName'])) {
            $model->adSlotName = $map['AdSlotName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
