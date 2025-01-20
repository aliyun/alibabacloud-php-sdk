<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAnsServiceClustersResponseBody\data;

use AlibabaCloud\Dara\Model;

class appDetail extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var int
     */
    public $checkInternal;
    /**
     * @var string
     */
    public $checkPath;
    /**
     * @var int
     */
    public $checkTimeout;
    /**
     * @var string
     */
    public $checkType;
    /**
     * @var int
     */
    public $healthyCheckTimes;
    /**
     * @var int
     */
    public $port;
    /**
     * @var int
     */
    public $unhealthyCheckTimes;
    protected $_name = [
        'appId'               => 'AppId',
        'appName'             => 'AppName',
        'checkInternal'       => 'CheckInternal',
        'checkPath'           => 'CheckPath',
        'checkTimeout'        => 'CheckTimeout',
        'checkType'           => 'CheckType',
        'healthyCheckTimes'   => 'HealthyCheckTimes',
        'port'                => 'Port',
        'unhealthyCheckTimes' => 'UnhealthyCheckTimes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->checkInternal) {
            $res['CheckInternal'] = $this->checkInternal;
        }

        if (null !== $this->checkPath) {
            $res['CheckPath'] = $this->checkPath;
        }

        if (null !== $this->checkTimeout) {
            $res['CheckTimeout'] = $this->checkTimeout;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->healthyCheckTimes) {
            $res['HealthyCheckTimes'] = $this->healthyCheckTimes;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->unhealthyCheckTimes) {
            $res['UnhealthyCheckTimes'] = $this->unhealthyCheckTimes;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['CheckInternal'])) {
            $model->checkInternal = $map['CheckInternal'];
        }

        if (isset($map['CheckPath'])) {
            $model->checkPath = $map['CheckPath'];
        }

        if (isset($map['CheckTimeout'])) {
            $model->checkTimeout = $map['CheckTimeout'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['HealthyCheckTimes'])) {
            $model->healthyCheckTimes = $map['HealthyCheckTimes'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['UnhealthyCheckTimes'])) {
            $model->unhealthyCheckTimes = $map['UnhealthyCheckTimes'];
        }

        return $model;
    }
}
