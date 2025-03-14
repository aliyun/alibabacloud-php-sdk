<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListEffectiveAssetsResponseBody;

use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @description The public IP address of the server.
     *
     * @example 60.205.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The name of the server.
     *
     * @example test
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The exception handling mode. Valid values:
     *
     *   **0**: unhandled
     *   **1**: alerted
     *   **2**: blocked
     *
     * @example 1
     *
     * @var int
     */
    public $processMethod;

    /**
     * @description The ID of the policy.
     *
     * @example 35815387
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the policy.
     *
     * @example test
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The number of **untrusted programs** on the server.
     *
     * @example 5
     *
     * @var int
     */
    public $suspiciousEventCount;

    /**
     * @description The UUID of the server.
     *
     * @example 544900ff-1be7-4655-9719-6311cecb3****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'machineName' => 'MachineName',
        'processMethod' => 'ProcessMethod',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'suspiciousEventCount' => 'SuspiciousEventCount',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->processMethod) {
            $res['ProcessMethod'] = $this->processMethod;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->suspiciousEventCount) {
            $res['SuspiciousEventCount'] = $this->suspiciousEventCount;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['ProcessMethod'])) {
            $model->processMethod = $map['ProcessMethod'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['SuspiciousEventCount'])) {
            $model->suspiciousEventCount = $map['SuspiciousEventCount'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
