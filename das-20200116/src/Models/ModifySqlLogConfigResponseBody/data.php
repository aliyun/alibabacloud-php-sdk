<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifySqlLogConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $coldEnable;
    /**
     * @var int
     */
    public $coldRetention;
    /**
     * @var int
     */
    public $coldStartTime;
    /**
     * @var string
     */
    public $collectorVersion;
    /**
     * @var bool
     */
    public $hotEnable;
    /**
     * @var int
     */
    public $hotRetention;
    /**
     * @var int
     */
    public $hotStartTime;
    /**
     * @var string
     */
    public $logFilter;
    /**
     * @var bool
     */
    public $requestEnable;
    /**
     * @var int
     */
    public $requestStartTime;
    /**
     * @var int
     */
    public $requestStopTime;
    /**
     * @var int
     */
    public $retention;
    /**
     * @var bool
     */
    public $sqlLogEnable;
    /**
     * @var string
     */
    public $sqlLogState;
    /**
     * @var int
     */
    public $sqlLogVisibleTime;
    /**
     * @var string
     */
    public $supportVersion;
    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'coldEnable'        => 'ColdEnable',
        'coldRetention'     => 'ColdRetention',
        'coldStartTime'     => 'ColdStartTime',
        'collectorVersion'  => 'CollectorVersion',
        'hotEnable'         => 'HotEnable',
        'hotRetention'      => 'HotRetention',
        'hotStartTime'      => 'HotStartTime',
        'logFilter'         => 'LogFilter',
        'requestEnable'     => 'RequestEnable',
        'requestStartTime'  => 'RequestStartTime',
        'requestStopTime'   => 'RequestStopTime',
        'retention'         => 'Retention',
        'sqlLogEnable'      => 'SqlLogEnable',
        'sqlLogState'       => 'SqlLogState',
        'sqlLogVisibleTime' => 'SqlLogVisibleTime',
        'supportVersion'    => 'SupportVersion',
        'version'           => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldEnable) {
            $res['ColdEnable'] = $this->coldEnable;
        }

        if (null !== $this->coldRetention) {
            $res['ColdRetention'] = $this->coldRetention;
        }

        if (null !== $this->coldStartTime) {
            $res['ColdStartTime'] = $this->coldStartTime;
        }

        if (null !== $this->collectorVersion) {
            $res['CollectorVersion'] = $this->collectorVersion;
        }

        if (null !== $this->hotEnable) {
            $res['HotEnable'] = $this->hotEnable;
        }

        if (null !== $this->hotRetention) {
            $res['HotRetention'] = $this->hotRetention;
        }

        if (null !== $this->hotStartTime) {
            $res['HotStartTime'] = $this->hotStartTime;
        }

        if (null !== $this->logFilter) {
            $res['LogFilter'] = $this->logFilter;
        }

        if (null !== $this->requestEnable) {
            $res['RequestEnable'] = $this->requestEnable;
        }

        if (null !== $this->requestStartTime) {
            $res['RequestStartTime'] = $this->requestStartTime;
        }

        if (null !== $this->requestStopTime) {
            $res['RequestStopTime'] = $this->requestStopTime;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->sqlLogEnable) {
            $res['SqlLogEnable'] = $this->sqlLogEnable;
        }

        if (null !== $this->sqlLogState) {
            $res['SqlLogState'] = $this->sqlLogState;
        }

        if (null !== $this->sqlLogVisibleTime) {
            $res['SqlLogVisibleTime'] = $this->sqlLogVisibleTime;
        }

        if (null !== $this->supportVersion) {
            $res['SupportVersion'] = $this->supportVersion;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ColdEnable'])) {
            $model->coldEnable = $map['ColdEnable'];
        }

        if (isset($map['ColdRetention'])) {
            $model->coldRetention = $map['ColdRetention'];
        }

        if (isset($map['ColdStartTime'])) {
            $model->coldStartTime = $map['ColdStartTime'];
        }

        if (isset($map['CollectorVersion'])) {
            $model->collectorVersion = $map['CollectorVersion'];
        }

        if (isset($map['HotEnable'])) {
            $model->hotEnable = $map['HotEnable'];
        }

        if (isset($map['HotRetention'])) {
            $model->hotRetention = $map['HotRetention'];
        }

        if (isset($map['HotStartTime'])) {
            $model->hotStartTime = $map['HotStartTime'];
        }

        if (isset($map['LogFilter'])) {
            $model->logFilter = $map['LogFilter'];
        }

        if (isset($map['RequestEnable'])) {
            $model->requestEnable = $map['RequestEnable'];
        }

        if (isset($map['RequestStartTime'])) {
            $model->requestStartTime = $map['RequestStartTime'];
        }

        if (isset($map['RequestStopTime'])) {
            $model->requestStopTime = $map['RequestStopTime'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['SqlLogEnable'])) {
            $model->sqlLogEnable = $map['SqlLogEnable'];
        }

        if (isset($map['SqlLogState'])) {
            $model->sqlLogState = $map['SqlLogState'];
        }

        if (isset($map['SqlLogVisibleTime'])) {
            $model->sqlLogVisibleTime = $map['SqlLogVisibleTime'];
        }

        if (isset($map['SupportVersion'])) {
            $model->supportVersion = $map['SupportVersion'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
