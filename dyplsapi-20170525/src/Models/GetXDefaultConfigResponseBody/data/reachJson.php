<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class reachJson extends Model
{
    /**
     * @var string
     */
    public $callDir;

    /**
     * @var string
     */
    public $callStatus;

    /**
     * @var string
     */
    public $receiveDir;

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
    public $ruleType;

    /**
     * @var string
     */
    public $tempId;
    protected $_name = [
        'callDir' => 'CallDir',
        'callStatus' => 'CallStatus',
        'receiveDir' => 'ReceiveDir',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleType' => 'RuleType',
        'tempId' => 'TempId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callDir) {
            $res['CallDir'] = $this->callDir;
        }

        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }

        if (null !== $this->receiveDir) {
            $res['ReceiveDir'] = $this->receiveDir;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->tempId) {
            $res['TempId'] = $this->tempId;
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
        if (isset($map['CallDir'])) {
            $model->callDir = $map['CallDir'];
        }

        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }

        if (isset($map['ReceiveDir'])) {
            $model->receiveDir = $map['ReceiveDir'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['TempId'])) {
            $model->tempId = $map['TempId'];
        }

        return $model;
    }
}
