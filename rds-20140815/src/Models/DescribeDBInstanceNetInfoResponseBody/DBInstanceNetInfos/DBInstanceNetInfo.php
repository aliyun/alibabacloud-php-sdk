<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\securityIPGroups;

class DBInstanceNetInfo extends Model
{
    /**
     * @var string
     */
    public $babelfishPort;

    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $connectionStringType;

    /**
     * @var DBInstanceWeights
     */
    public $DBInstanceWeights;

    /**
     * @var string
     */
    public $distributionType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $maxDelayTime;

    /**
     * @var string
     */
    public $PGBouncerPort;

    /**
     * @var string
     */
    public $port;

    /**
     * @var securityIPGroups
     */
    public $securityIPGroups;

    /**
     * @var string
     */
    public $upgradeable;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'babelfishPort' => 'BabelfishPort',
        'connectionString' => 'ConnectionString',
        'connectionStringType' => 'ConnectionStringType',
        'DBInstanceWeights' => 'DBInstanceWeights',
        'distributionType' => 'DistributionType',
        'expiredTime' => 'ExpiredTime',
        'IPAddress' => 'IPAddress',
        'IPType' => 'IPType',
        'maxDelayTime' => 'MaxDelayTime',
        'PGBouncerPort' => 'PGBouncerPort',
        'port' => 'Port',
        'securityIPGroups' => 'SecurityIPGroups',
        'upgradeable' => 'Upgradeable',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceWeights) {
            $this->DBInstanceWeights->validate();
        }
        if (null !== $this->securityIPGroups) {
            $this->securityIPGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->babelfishPort) {
            $res['BabelfishPort'] = $this->babelfishPort;
        }

        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        if (null !== $this->connectionStringType) {
            $res['ConnectionStringType'] = $this->connectionStringType;
        }

        if (null !== $this->DBInstanceWeights) {
            $res['DBInstanceWeights'] = null !== $this->DBInstanceWeights ? $this->DBInstanceWeights->toArray($noStream) : $this->DBInstanceWeights;
        }

        if (null !== $this->distributionType) {
            $res['DistributionType'] = $this->distributionType;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }

        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }

        if (null !== $this->maxDelayTime) {
            $res['MaxDelayTime'] = $this->maxDelayTime;
        }

        if (null !== $this->PGBouncerPort) {
            $res['PGBouncerPort'] = $this->PGBouncerPort;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->securityIPGroups) {
            $res['SecurityIPGroups'] = null !== $this->securityIPGroups ? $this->securityIPGroups->toArray($noStream) : $this->securityIPGroups;
        }

        if (null !== $this->upgradeable) {
            $res['Upgradeable'] = $this->upgradeable;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['BabelfishPort'])) {
            $model->babelfishPort = $map['BabelfishPort'];
        }

        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        if (isset($map['ConnectionStringType'])) {
            $model->connectionStringType = $map['ConnectionStringType'];
        }

        if (isset($map['DBInstanceWeights'])) {
            $model->DBInstanceWeights = DBInstanceWeights::fromMap($map['DBInstanceWeights']);
        }

        if (isset($map['DistributionType'])) {
            $model->distributionType = $map['DistributionType'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }

        if (isset($map['MaxDelayTime'])) {
            $model->maxDelayTime = $map['MaxDelayTime'];
        }

        if (isset($map['PGBouncerPort'])) {
            $model->PGBouncerPort = $map['PGBouncerPort'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['SecurityIPGroups'])) {
            $model->securityIPGroups = securityIPGroups::fromMap($map['SecurityIPGroups']);
        }

        if (isset($map['Upgradeable'])) {
            $model->upgradeable = $map['Upgradeable'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
