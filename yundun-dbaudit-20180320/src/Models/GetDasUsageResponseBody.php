<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\agent;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\auditAsset;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\consoleAccess;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\noticeState;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\riskAsset;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\riskRule;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\wpAsset;
use AlibabaCloud\Tea\Model;

class GetDasUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $over1sSqlCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sessionTotalCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $sqlTotalCount;

    /**
     * @var auditAsset
     */
    public $auditAsset;

    /**
     * @var consoleAccess
     */
    public $consoleAccess;

    /**
     * @var agent
     */
    public $agent;

    /**
     * @var noticeState
     */
    public $noticeState;

    /**
     * @var riskAsset
     */
    public $riskAsset;

    /**
     * @var riskRule
     */
    public $riskRule;

    /**
     * @var wpAsset
     */
    public $wpAsset;
    protected $_name = [
        'over1sSqlCount'    => 'Over1sSqlCount',
        'requestId'         => 'RequestId',
        'sessionTotalCount' => 'SessionTotalCount',
        'createTime'        => 'CreateTime',
        'sqlTotalCount'     => 'SqlTotalCount',
        'auditAsset'        => 'AuditAsset',
        'consoleAccess'     => 'ConsoleAccess',
        'agent'             => 'Agent',
        'noticeState'       => 'NoticeState',
        'riskAsset'         => 'RiskAsset',
        'riskRule'          => 'RiskRule',
        'wpAsset'           => 'WpAsset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->over1sSqlCount) {
            $res['Over1sSqlCount'] = $this->over1sSqlCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionTotalCount) {
            $res['SessionTotalCount'] = $this->sessionTotalCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sqlTotalCount) {
            $res['SqlTotalCount'] = $this->sqlTotalCount;
        }
        if (null !== $this->auditAsset) {
            $res['AuditAsset'] = null !== $this->auditAsset ? $this->auditAsset->toMap() : null;
        }
        if (null !== $this->consoleAccess) {
            $res['ConsoleAccess'] = null !== $this->consoleAccess ? $this->consoleAccess->toMap() : null;
        }
        if (null !== $this->agent) {
            $res['Agent'] = null !== $this->agent ? $this->agent->toMap() : null;
        }
        if (null !== $this->noticeState) {
            $res['NoticeState'] = null !== $this->noticeState ? $this->noticeState->toMap() : null;
        }
        if (null !== $this->riskAsset) {
            $res['RiskAsset'] = null !== $this->riskAsset ? $this->riskAsset->toMap() : null;
        }
        if (null !== $this->riskRule) {
            $res['RiskRule'] = null !== $this->riskRule ? $this->riskRule->toMap() : null;
        }
        if (null !== $this->wpAsset) {
            $res['WpAsset'] = null !== $this->wpAsset ? $this->wpAsset->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDasUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Over1sSqlCount'])) {
            $model->over1sSqlCount = $map['Over1sSqlCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionTotalCount'])) {
            $model->sessionTotalCount = $map['SessionTotalCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SqlTotalCount'])) {
            $model->sqlTotalCount = $map['SqlTotalCount'];
        }
        if (isset($map['AuditAsset'])) {
            $model->auditAsset = auditAsset::fromMap($map['AuditAsset']);
        }
        if (isset($map['ConsoleAccess'])) {
            $model->consoleAccess = consoleAccess::fromMap($map['ConsoleAccess']);
        }
        if (isset($map['Agent'])) {
            $model->agent = agent::fromMap($map['Agent']);
        }
        if (isset($map['NoticeState'])) {
            $model->noticeState = noticeState::fromMap($map['NoticeState']);
        }
        if (isset($map['RiskAsset'])) {
            $model->riskAsset = riskAsset::fromMap($map['RiskAsset']);
        }
        if (isset($map['RiskRule'])) {
            $model->riskRule = riskRule::fromMap($map['RiskRule']);
        }
        if (isset($map['WpAsset'])) {
            $model->wpAsset = wpAsset::fromMap($map['WpAsset']);
        }

        return $model;
    }
}
