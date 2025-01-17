<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListEffectiveAssetsResponseBody;

use AlibabaCloud\Dara\Model;

class assets extends Model
{
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var string
     */
    public $machineName;
    /**
     * @var int
     */
    public $processMethod;
    /**
     * @var int
     */
    public $strategyId;
    /**
     * @var string
     */
    public $strategyName;
    /**
     * @var int
     */
    public $suspiciousEventCount;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'internetIp'           => 'InternetIp',
        'intranetIp'           => 'IntranetIp',
        'machineName'          => 'MachineName',
        'processMethod'        => 'ProcessMethod',
        'strategyId'           => 'StrategyId',
        'strategyName'         => 'StrategyName',
        'suspiciousEventCount' => 'SuspiciousEventCount',
        'uuid'                 => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
