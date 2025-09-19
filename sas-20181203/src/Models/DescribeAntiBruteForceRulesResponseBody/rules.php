<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponseBody\rules\protocolType;

class rules extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var bool
     */
    public $defaultRule;

    /**
     * @var bool
     */
    public $enableSmartRule;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var int
     */
    public $forbiddenTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $machineCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var protocolType
     */
    public $protocolType;

    /**
     * @var int
     */
    public $span;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'defaultRule' => 'DefaultRule',
        'enableSmartRule' => 'EnableSmartRule',
        'failCount' => 'FailCount',
        'forbiddenTime' => 'ForbiddenTime',
        'id' => 'Id',
        'machineCount' => 'MachineCount',
        'name' => 'Name',
        'protocolType' => 'ProtocolType',
        'span' => 'Span',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
        if (null !== $this->protocolType) {
            $this->protocolType->validate();
        }
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = $this->defaultRule;
        }

        if (null !== $this->enableSmartRule) {
            $res['EnableSmartRule'] = $this->enableSmartRule;
        }

        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->forbiddenTime) {
            $res['ForbiddenTime'] = $this->forbiddenTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->machineCount) {
            $res['MachineCount'] = $this->machineCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = null !== $this->protocolType ? $this->protocolType->toArray($noStream) : $this->protocolType;
        }

        if (null !== $this->span) {
            $res['Span'] = $this->span;
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1 = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['DefaultRule'])) {
            $model->defaultRule = $map['DefaultRule'];
        }

        if (isset($map['EnableSmartRule'])) {
            $model->enableSmartRule = $map['EnableSmartRule'];
        }

        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['ForbiddenTime'])) {
            $model->forbiddenTime = $map['ForbiddenTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MachineCount'])) {
            $model->machineCount = $map['MachineCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = protocolType::fromMap($map['ProtocolType']);
        }

        if (isset($map['Span'])) {
            $model->span = $map['Span'];
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1 = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
