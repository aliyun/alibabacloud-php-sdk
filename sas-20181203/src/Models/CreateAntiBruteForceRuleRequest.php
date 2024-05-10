<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateAntiBruteForceRuleRequest extends Model
{
    /**
     * @description Specifies whether to set the defense rule as the default rule. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  If no defense rule is created for a server, the default rule is applied to the server.
     * @example true
     *
     * @var bool
     */
    public $defaultRule;

    /**
     * @description The maximum number of failed logon attempts from an account. Valid values: 2, 3, 4, 5, 10, 50, 80, and 100.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $failCount;

    /**
     * @description The period of time during which logons from an account are not allowed. Unit: minutes. Valid values:
     *
     *   **5**: 5 minutes
     *   **15**: 15 minutes
     *   **30**: 30 minutes
     *   **60**: 1 hour
     *   **120**: 2 hours
     *   **360**: 6 hours
     *   **720**: 12 hours
     *   **1440**: 24 hours
     *   **10080**: 7 days
     *   **52560000**: permanent
     *
     * This parameter is required.
     * @example 5
     *
     * @var int
     */
    public $forbiddenTime;

    /**
     * @description The name of the defense rule.
     *
     * This parameter is required.
     * @example TestAntiBruteForceRule
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The maximum period of time during which failed logon attempts from an account can occur. Unit: minutes. Valid values:
     *
     *   **1**
     *   **2**
     *   **5**
     *   **10**
     *   **15**
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $span;

    /**
     * @description The UUIDs of the servers to which you want to apply the defense rule.
     *
     * This parameter is required.
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'defaultRule'     => 'DefaultRule',
        'failCount'       => 'FailCount',
        'forbiddenTime'   => 'ForbiddenTime',
        'name'            => 'Name',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp'        => 'SourceIp',
        'span'            => 'Span',
        'uuidList'        => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultRule) {
            $res['DefaultRule'] = $this->defaultRule;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->forbiddenTime) {
            $res['ForbiddenTime'] = $this->forbiddenTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
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
     * @return CreateAntiBruteForceRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultRule'])) {
            $model->defaultRule = $map['DefaultRule'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['ForbiddenTime'])) {
            $model->forbiddenTime = $map['ForbiddenTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
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
