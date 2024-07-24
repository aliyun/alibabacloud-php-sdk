<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\serviceDomainConfigs;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appGroup;

    /**
     * @description The application type. Valid values: web, miniapp, ios, and android.
     *
     * @example web
     *
     * @var string
     */
    public $appType;

    /**
     * @var bonreeSDKConfig
     */
    public $bonreeSDKConfig;

    /**
     * @example b59xxxxxxxx-sdk.rum.aliyuncs.com/v2/browser-sdk.js
     *
     * @var string
     */
    public $cdnDomain;

    /**
     * @description The time when the application was created. The value is a timestamp. Unit: milliseconds.
     *
     * @example 1683353594000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the application.
     *
     * @var string
     */
    public $description;

    /**
     * @description The endpoint that is used to report application data.
     *
     * @example xxxxxxxx-default-cn.rum.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description Indicates whether the application is subscribed. Valid values: true and false.
     *
     * @example true
     *
     * @var string
     */
    public $isSubscription;

    /**
     * @description The application name.
     *
     * @example tomcat-demo-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The alias of the application.
     *
     * @example nickname
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The name of the application package.
     *
     * @example com.alibaba.rum
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The application ID.
     *
     * @example avccccefy0@24cccccbf384dc6
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek2vezare****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Service domain name configuration list (currently only supports mobile applications).
     *
     * @var serviceDomainConfigs[]
     */
    public $serviceDomainConfigs;

    /**
     * @description The name of the Simple Log Service Logstore that stores application data.
     *
     * @example logstore-rum
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @description The name of the Simple Log Service project that stores application data.
     *
     * @example proj-xtrace-xxxxxxxxxxxxxxxxxxxxxxx-cn-hangzhou
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description The status of the application. Valid values: created, running, and stopped.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the application. Valid value: RUM.
     *
     * @example RUM
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appGroup'             => 'AppGroup',
        'appType'              => 'AppType',
        'bonreeSDKConfig'      => 'BonreeSDKConfig',
        'cdnDomain'            => 'CdnDomain',
        'createTime'           => 'CreateTime',
        'description'          => 'Description',
        'endpoint'             => 'Endpoint',
        'isSubscription'       => 'IsSubscription',
        'name'                 => 'Name',
        'nickName'             => 'NickName',
        'packageName'          => 'PackageName',
        'pid'                  => 'Pid',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'serviceDomainConfigs' => 'ServiceDomainConfigs',
        'slsLogstore'          => 'SlsLogstore',
        'slsProject'           => 'SlsProject',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->bonreeSDKConfig) {
            $res['BonreeSDKConfig'] = null !== $this->bonreeSDKConfig ? $this->bonreeSDKConfig->toMap() : null;
        }
        if (null !== $this->cdnDomain) {
            $res['CdnDomain'] = $this->cdnDomain;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->isSubscription) {
            $res['IsSubscription'] = $this->isSubscription;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceDomainConfigs) {
            $res['ServiceDomainConfigs'] = [];
            if (null !== $this->serviceDomainConfigs && \is_array($this->serviceDomainConfigs)) {
                $n = 0;
                foreach ($this->serviceDomainConfigs as $item) {
                    $res['ServiceDomainConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['BonreeSDKConfig'])) {
            $model->bonreeSDKConfig = bonreeSDKConfig::fromMap($map['BonreeSDKConfig']);
        }
        if (isset($map['CdnDomain'])) {
            $model->cdnDomain = $map['CdnDomain'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['IsSubscription'])) {
            $model->isSubscription = $map['IsSubscription'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceDomainConfigs'])) {
            if (!empty($map['ServiceDomainConfigs'])) {
                $model->serviceDomainConfigs = [];
                $n                           = 0;
                foreach ($map['ServiceDomainConfigs'] as $item) {
                    $model->serviceDomainConfigs[$n++] = null !== $item ? serviceDomainConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
