<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAntiBruteForceRulesResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Indicates whether the defense rule is the default rule. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * > The default rule takes effect on all servers that are not protected by defense rules against brute-force attacks.
     * @example true
     *
     * @var bool
     */
    public $defaultRule;

    /**
     * @description This parameter is deprecated.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSmartRule;

    /**
     * @description The threshold of logon failures that you specify.
     *
     * @example 15
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The period of time during which logons from an account are not allowed. Unit: minutes.
     *
     * @example 360
     *
     * @var int
     */
    public $forbiddenTime;

    /**
     * @description The ID of the defense rule.
     *
     * @example 1629
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of servers to which the defense rule is applied.
     *
     * @example 3
     *
     * @var int
     */
    public $machineCount;

    /**
     * @description The name of the defense rule.
     *
     * @example AntiBruteForceRule01
     *
     * @var string
     */
    public $name;

    /**
     * @description The period of time during which logon failures from an account are measured. Unit: minutes. If **Span** is set to 10, the defense rule takes effect when the logon failures measured within 10 minutes reaches the specified threshold. The IP addresses of attackers cannot be used to log on to the server within the specified period of time.
     *
     * @example 10
     *
     * @var int
     */
    public $span;

    /**
     * @description An array consisting of the UUIDs of servers to which the defense rule is applied.
     *
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'defaultRule'     => 'DefaultRule',
        'enableSmartRule' => 'EnableSmartRule',
        'failCount'       => 'FailCount',
        'forbiddenTime'   => 'ForbiddenTime',
        'id'              => 'Id',
        'machineCount'    => 'MachineCount',
        'name'            => 'Name',
        'span'            => 'Span',
        'uuidList'        => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->span) {
            $res['Span'] = $this->span;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
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
        if (isset($map['Span'])) {
            $model->span = $map['Span'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
