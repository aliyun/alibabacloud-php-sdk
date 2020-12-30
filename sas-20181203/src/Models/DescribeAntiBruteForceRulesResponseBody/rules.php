<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var string[]
     */
    public $uuidList;

    /**
     * @var int
     */
    public $machineCount;

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
    public $span;

    /**
     * @var bool
     */
    public $defaultRule;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'uuidList'        => 'UuidList',
        'machineCount'    => 'MachineCount',
        'enableSmartRule' => 'EnableSmartRule',
        'failCount'       => 'FailCount',
        'forbiddenTime'   => 'ForbiddenTime',
        'span'            => 'Span',
        'defaultRule'     => 'DefaultRule',
        'name'            => 'Name',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }
        if (null !== $this->machineCount) {
            $res['MachineCount'] = $this->machineCount;
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
        if (null !== $this->span) {
            $res['Span'] = $this->span;
        }
        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = $this->defaultRule;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }
        if (isset($map['MachineCount'])) {
            $model->machineCount = $map['MachineCount'];
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
        if (isset($map['Span'])) {
            $model->span = $map['Span'];
        }
        if (isset($map['DefaultRule'])) {
            $model->defaultRule = $map['DefaultRule'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
