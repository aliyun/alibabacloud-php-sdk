<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\DeviceResource;

use AlibabaCloud\Tea\Model;

class deviceResource extends Model
{
    /**
     * @var string
     */
    public $blockNumber;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $config;

    /**
     * @var bool
     */
    public $configGenerate;

    /**
     * @var string
     */
    public $configTaskStatus;

    /**
     * @var string
     */
    public $deliveryIp;

    /**
     * @var string
     */
    public $deviceNumber;

    /**
     * @var string
     */
    public $deviceResourceId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $interConnection;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $loopback;

    /**
     * @var string
     */
    public $managerIp;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $setupProjectId;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var bool
     */
    public $stack;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'blockNumber'      => 'BlockNumber',
        'business'         => 'Business',
        'config'           => 'Config',
        'configGenerate'   => 'ConfigGenerate',
        'configTaskStatus' => 'ConfigTaskStatus',
        'deliveryIp'       => 'DeliveryIp',
        'deviceNumber'     => 'DeviceNumber',
        'deviceResourceId' => 'DeviceResourceId',
        'hostName'         => 'HostName',
        'interConnection'  => 'InterConnection',
        'location'         => 'Location',
        'loopback'         => 'Loopback',
        'managerIp'        => 'ManagerIp',
        'model'            => 'Model',
        'role'             => 'Role',
        'setupProjectId'   => 'SetupProjectId',
        'sn'               => 'Sn',
        'stack'            => 'Stack',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockNumber) {
            $res['BlockNumber'] = $this->blockNumber;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->configGenerate) {
            $res['ConfigGenerate'] = $this->configGenerate;
        }
        if (null !== $this->configTaskStatus) {
            $res['ConfigTaskStatus'] = $this->configTaskStatus;
        }
        if (null !== $this->deliveryIp) {
            $res['DeliveryIp'] = $this->deliveryIp;
        }
        if (null !== $this->deviceNumber) {
            $res['DeviceNumber'] = $this->deviceNumber;
        }
        if (null !== $this->deviceResourceId) {
            $res['DeviceResourceId'] = $this->deviceResourceId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->interConnection) {
            $res['InterConnection'] = $this->interConnection;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->loopback) {
            $res['Loopback'] = $this->loopback;
        }
        if (null !== $this->managerIp) {
            $res['ManagerIp'] = $this->managerIp;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockNumber'])) {
            $model->blockNumber = $map['BlockNumber'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['ConfigGenerate'])) {
            $model->configGenerate = $map['ConfigGenerate'];
        }
        if (isset($map['ConfigTaskStatus'])) {
            $model->configTaskStatus = $map['ConfigTaskStatus'];
        }
        if (isset($map['DeliveryIp'])) {
            $model->deliveryIp = $map['DeliveryIp'];
        }
        if (isset($map['DeviceNumber'])) {
            $model->deviceNumber = $map['DeviceNumber'];
        }
        if (isset($map['DeviceResourceId'])) {
            $model->deviceResourceId = $map['DeviceResourceId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InterConnection'])) {
            $model->interConnection = $map['InterConnection'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['Loopback'])) {
            $model->loopback = $map['Loopback'];
        }
        if (isset($map['ManagerIp'])) {
            $model->managerIp = $map['ManagerIp'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
