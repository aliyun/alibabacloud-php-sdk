<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateRumAppRequest extends Model
{
    /**
     * @description Specifies whether to restart the application the next day. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRestart;

    /**
     * @var string
     */
    public $bonreeSDKConfigJson;

    /**
     * @description The description of the application.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether you want to subscribe to the application. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $isSubscribe;

    /**
     * @description The alias of the application.
     *
     * @var string
     */
    public $nickname;

    /**
     * @description The application ID.
     *
     * This parameter is required.
     * @example b5xxxxs@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to restart the application. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $restart;

    /**
     * @description Set the application service domain name, support creation, modification, and deletion of service domain name configuration.
     *
     * @example {\\"Op\\":\\"Update\\",\\"Domain\\":\\"example.com\\",\\"Config\\":{\\"Description\\":\\"message\\",\\"Tracing\\":\\"true\\",\\"PropagatorTypes\\":[\\"sw8\\"]}}
     *
     * @var string
     */
    public $serviceDomainOperationJson;

    /**
     * @description Specifies whether to stop the application. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $stop;
    protected $_name = [
        'autoRestart'                => 'AutoRestart',
        'bonreeSDKConfigJson'        => 'BonreeSDKConfigJson',
        'description'                => 'Description',
        'isSubscribe'                => 'IsSubscribe',
        'nickname'                   => 'Nickname',
        'pid'                        => 'Pid',
        'regionId'                   => 'RegionId',
        'restart'                    => 'Restart',
        'serviceDomainOperationJson' => 'ServiceDomainOperationJson',
        'stop'                       => 'Stop',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRestart) {
            $res['AutoRestart'] = $this->autoRestart;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRumAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRestart'])) {
            $model->autoRestart = $map['AutoRestart'];
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

        return $model;
    }
}
