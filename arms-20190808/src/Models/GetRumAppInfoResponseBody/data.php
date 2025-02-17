<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\bonreeSDKConfig;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\serviceDomainConfigs;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetRumAppInfoResponseBody\data\tags;

class data extends Model
{
    /**
     * @var string
     */
    public $appConfig;
    /**
     * @var string
     */
    public $appGroup;
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $backendServiceTraceRegion;
    /**
     * @var bonreeSDKConfig
     */
    public $bonreeSDKConfig;
    /**
     * @var string
     */
    public $cdnDomain;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $isSubscription;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nickName;
    /**
     * @var string
     */
    public $packageName;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var serviceDomainConfigs[]
     */
    public $serviceDomainConfigs;
    /**
     * @var string
     */
    public $slsLogstore;
    /**
     * @var string
     */
    public $slsProject;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appConfig'                 => 'AppConfig',
        'appGroup'                  => 'AppGroup',
        'appType'                   => 'AppType',
        'backendServiceTraceRegion' => 'BackendServiceTraceRegion',
        'bonreeSDKConfig'           => 'BonreeSDKConfig',
        'cdnDomain'                 => 'CdnDomain',
        'createTime'                => 'CreateTime',
        'description'               => 'Description',
        'endpoint'                  => 'Endpoint',
        'isSubscription'            => 'IsSubscription',
        'name'                      => 'Name',
        'nickName'                  => 'NickName',
        'packageName'               => 'PackageName',
        'pid'                       => 'Pid',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'serviceDomainConfigs'      => 'ServiceDomainConfigs',
        'slsLogstore'               => 'SlsLogstore',
        'slsProject'                => 'SlsProject',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
        'type'                      => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->bonreeSDKConfig) {
            $this->bonreeSDKConfig->validate();
        }
        if (\is_array($this->serviceDomainConfigs)) {
            Model::validateArray($this->serviceDomainConfigs);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }

        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->backendServiceTraceRegion) {
            $res['BackendServiceTraceRegion'] = $this->backendServiceTraceRegion;
        }

        if (null !== $this->bonreeSDKConfig) {
            $res['BonreeSDKConfig'] = null !== $this->bonreeSDKConfig ? $this->bonreeSDKConfig->toArray($noStream) : $this->bonreeSDKConfig;
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
            if (\is_array($this->serviceDomainConfigs)) {
                $res['ServiceDomainConfigs'] = [];
                $n1                          = 0;
                foreach ($this->serviceDomainConfigs as $item1) {
                    $res['ServiceDomainConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BackendServiceTraceRegion'])) {
            $model->backendServiceTraceRegion = $map['BackendServiceTraceRegion'];
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
                $n1                          = 0;
                foreach ($map['ServiceDomainConfigs'] as $item1) {
                    $model->serviceDomainConfigs[$n1++] = serviceDomainConfigs::fromMap($item1);
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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
