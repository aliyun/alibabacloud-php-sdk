<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdateRumAppRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRestart;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSubscribe;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @description This parameter is required.
     *
     * @example b5xxxxs@d8deedfa9bf****
     *
     * @var string
     */
    public $pid;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $restart;

    /**
     * @var string
     */
    public $serviceDomainOperationJson;

    /**
     * @example true
     *
     * @var bool
     */
    public $stop;
    protected $_name = [
        'autoRestart'                => 'AutoRestart',
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
