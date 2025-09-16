<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class UpdateRumAppRequest extends Model
{
    /**
     * @var string
     */
    public $appConfig;

    /**
     * @var bool
     */
    public $autoRestart;

    /**
     * @var string
     */
    public $backendServiceTraceRegion;

    /**
     * @var string
     */
    public $bonreeSDKConfigJson;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isSubscribe;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $realRegionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var string
     */
    public $serviceDomainOperationJson;

    /**
     * @var bool
     */
    public $stop;

    /**
     * @var string
     */
    public $webSDKConfigJson;
    protected $_name = [
        'appConfig' => 'AppConfig',
        'autoRestart' => 'AutoRestart',
        'backendServiceTraceRegion' => 'BackendServiceTraceRegion',
        'bonreeSDKConfigJson' => 'BonreeSDKConfigJson',
        'description' => 'Description',
        'isSubscribe' => 'IsSubscribe',
        'nickname' => 'Nickname',
        'pid' => 'Pid',
        'realRegionId' => 'RealRegionId',
        'regionId' => 'RegionId',
        'restart' => 'Restart',
        'serviceDomainOperationJson' => 'ServiceDomainOperationJson',
        'stop' => 'Stop',
        'webSDKConfigJson' => 'WebSDKConfigJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }

        if (null !== $this->autoRestart) {
            $res['AutoRestart'] = $this->autoRestart;
        }

        if (null !== $this->backendServiceTraceRegion) {
            $res['BackendServiceTraceRegion'] = $this->backendServiceTraceRegion;
        }

        if (null !== $this->bonreeSDKConfigJson) {
            $res['BonreeSDKConfigJson'] = $this->bonreeSDKConfigJson;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isSubscribe) {
            $res['IsSubscribe'] = $this->isSubscribe;
        }

        if (null !== $this->nickname) {
            $res['Nickname'] = $this->nickname;
        }

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->realRegionId) {
            $res['RealRegionId'] = $this->realRegionId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->serviceDomainOperationJson) {
            $res['ServiceDomainOperationJson'] = $this->serviceDomainOperationJson;
        }

        if (null !== $this->stop) {
            $res['Stop'] = $this->stop;
        }

        if (null !== $this->webSDKConfigJson) {
            $res['WebSDKConfigJson'] = $this->webSDKConfigJson;
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
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }

        if (isset($map['AutoRestart'])) {
            $model->autoRestart = $map['AutoRestart'];
        }

        if (isset($map['BackendServiceTraceRegion'])) {
            $model->backendServiceTraceRegion = $map['BackendServiceTraceRegion'];
        }

        if (isset($map['BonreeSDKConfigJson'])) {
            $model->bonreeSDKConfigJson = $map['BonreeSDKConfigJson'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsSubscribe'])) {
            $model->isSubscribe = $map['IsSubscribe'];
        }

        if (isset($map['Nickname'])) {
            $model->nickname = $map['Nickname'];
        }

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RealRegionId'])) {
            $model->realRegionId = $map['RealRegionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['ServiceDomainOperationJson'])) {
            $model->serviceDomainOperationJson = $map['ServiceDomainOperationJson'];
        }

        if (isset($map['Stop'])) {
            $model->stop = $map['Stop'];
        }

        if (isset($map['WebSDKConfigJson'])) {
            $model->webSDKConfigJson = $map['WebSDKConfigJson'];
        }

        return $model;
    }
}
