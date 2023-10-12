<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @example PING
     *
     * @var string
     */
    public $collectionType;

    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceForm;

    /**
     * @example 1
     *
     * @var int
     */
    public $effective;

    /**
     * @example 60
     *
     * @var string
     */
    public $execInterval;

    /**
     * @example 连通性监控
     *
     * @var string
     */
    public $monitorItemDescription;

    /**
     * @example m-22ut5sn54o35wsz6
     *
     * @var string
     */
    public $monitorItemId;

    /**
     * @example Ping_Monitor
     *
     * @var string
     */
    public $monitorItemName;

    /**
     * @example YT
     *
     * @var string
     */
    public $securityDomain;
    protected $_name = [
        'collectionType'         => 'CollectionType',
        'deviceForm'             => 'DeviceForm',
        'effective'              => 'Effective',
        'execInterval'           => 'ExecInterval',
        'monitorItemDescription' => 'MonitorItemDescription',
        'monitorItemId'          => 'MonitorItemId',
        'monitorItemName'        => 'MonitorItemName',
        'securityDomain'         => 'SecurityDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }
        if (null !== $this->deviceForm) {
            $res['DeviceForm'] = $this->deviceForm;
        }
        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }
        if (null !== $this->execInterval) {
            $res['ExecInterval'] = $this->execInterval;
        }
        if (null !== $this->monitorItemDescription) {
            $res['MonitorItemDescription'] = $this->monitorItemDescription;
        }
        if (null !== $this->monitorItemId) {
            $res['MonitorItemId'] = $this->monitorItemId;
        }
        if (null !== $this->monitorItemName) {
            $res['MonitorItemName'] = $this->monitorItemName;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }
        if (isset($map['DeviceForm'])) {
            $model->deviceForm = $map['DeviceForm'];
        }
        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }
        if (isset($map['ExecInterval'])) {
            $model->execInterval = $map['ExecInterval'];
        }
        if (isset($map['MonitorItemDescription'])) {
            $model->monitorItemDescription = $map['MonitorItemDescription'];
        }
        if (isset($map['MonitorItemId'])) {
            $model->monitorItemId = $map['MonitorItemId'];
        }
        if (isset($map['MonitorItemName'])) {
            $model->monitorItemName = $map['MonitorItemName'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }

        return $model;
    }
}
