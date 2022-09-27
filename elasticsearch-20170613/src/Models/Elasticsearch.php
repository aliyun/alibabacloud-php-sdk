<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Elasticsearch\advancedSetting;
use AlibabaCloud\Tea\Model;

class Elasticsearch extends Model
{
    /**
     * @var bool
     */
    public $advancedDedicateMaster;

    /**
     * @var advancedSetting
     */
    public $advancedSetting;

    /**
     * @var DictInfo[]
     */
    public $aliwsDicts;

    /**
     * @var ClientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $dataNode;

    /**
     * @var bool
     */
    public $dedicateMaster;

    /**
     * @var string
     */
    public $description;

    /**
     * @var DictInfo[]
     */
    public $dictList;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var ElasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @var bool
     */
    public $enableKibanaPrivateNetwork;

    /**
     * @var bool
     */
    public $enableKibanaPublicNetwork;

    /**
     * @var bool
     */
    public $enablePublic;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $esConfig;

    /**
     * @var string[]
     */
    public $esIPWhitelist;

    /**
     * @var string
     */
    public $esVersion;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @var bool
     */
    public $haveClientNode;

    /**
     * @var bool
     */
    public $haveElasticDataNode;

    /**
     * @var bool
     */
    public $haveKibana;

    /**
     * @var DictInfo[]
     */
    public $ikHotDicts;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var KibanaNodeConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @var string
     */
    public $kibanaDomain;

    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;

    /**
     * @var int
     */
    public $kibanaPort;

    /**
     * @var string
     */
    public $kibanaPrivateDomain;

    /**
     * @var string[]
     */
    public $kibanaPrivateIPWhitelist;

    /**
     * @var int
     */
    public $kibanaPrivatePort;

    /**
     * @var string
     */
    public $kibanaProtocol;

    /**
     * @var MasterNodeConfiguration
     */
    public $masterConfiguration;

    /**
     * @var NetworkConfig
     */
    public $networkConfig;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var NodeSpec
     */
    public $nodeSpec;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string[]
     */
    public $privateNetworkIpWhiteList;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $publicDomain;

    /**
     * @var string[]
     */
    public $publicIpWhitelist;

    /**
     * @var int
     */
    public $publicPort;

    /**
     * @var ReadWritePolicy
     */
    public $readWritePolicy;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $serviceVpc;

    /**
     * @var string
     */
    public $status;

    /**
     * @var DictInfo[]
     */
    public $synonymsDicts;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var bool
     */
    public $warmNode;

    /**
     * @var WarmNodeConfiguration
     */
    public $warmNodeConfiguration;

    /**
     * @var int
     */
    public $zoneCount;

    /**
     * @var ZoneInfo[]
     */
    public $zoneInfos;
    protected $_name = [
        'advancedDedicateMaster'       => 'advancedDedicateMaster',
        'advancedSetting'              => 'advancedSetting',
        'aliwsDicts'                   => 'aliwsDicts',
        'clientNodeConfiguration'      => 'clientNodeConfiguration',
        'createdAt'                    => 'createdAt',
        'dataNode'                     => 'dataNode',
        'dedicateMaster'               => 'dedicateMaster',
        'description'                  => 'description',
        'dictList'                     => 'dictList',
        'domain'                       => 'domain',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'enableKibanaPrivateNetwork'   => 'enableKibanaPrivateNetwork',
        'enableKibanaPublicNetwork'    => 'enableKibanaPublicNetwork',
        'enablePublic'                 => 'enablePublic',
        'endTime'                      => 'endTime',
        'esConfig'                     => 'esConfig',
        'esIPWhitelist'                => 'esIPWhitelist',
        'esVersion'                    => 'esVersion',
        'extendConfigs'                => 'extendConfigs',
        'haveClientNode'               => 'haveClientNode',
        'haveElasticDataNode'          => 'haveElasticDataNode',
        'haveKibana'                   => 'haveKibana',
        'ikHotDicts'                   => 'ikHotDicts',
        'instanceId'                   => 'instanceId',
        'kibanaConfiguration'          => 'kibanaConfiguration',
        'kibanaDomain'                 => 'kibanaDomain',
        'kibanaIPWhitelist'            => 'kibanaIPWhitelist',
        'kibanaPort'                   => 'kibanaPort',
        'kibanaPrivateDomain'          => 'kibanaPrivateDomain',
        'kibanaPrivateIPWhitelist'     => 'kibanaPrivateIPWhitelist',
        'kibanaPrivatePort'            => 'kibanaPrivatePort',
        'kibanaProtocol'               => 'kibanaProtocol',
        'masterConfiguration'          => 'masterConfiguration',
        'networkConfig'                => 'networkConfig',
        'nodeAmount'                   => 'nodeAmount',
        'nodeSpec'                     => 'nodeSpec',
        'paymentType'                  => 'paymentType',
        'port'                         => 'port',
        'privateNetworkIpWhiteList'    => 'privateNetworkIpWhiteList',
        'productType'                  => 'productType',
        'protocol'                     => 'protocol',
        'publicDomain'                 => 'publicDomain',
        'publicIpWhitelist'            => 'publicIpWhitelist',
        'publicPort'                   => 'publicPort',
        'readWritePolicy'              => 'readWritePolicy',
        'resourceGroupId'              => 'resourceGroupId',
        'serviceVpc'                   => 'serviceVpc',
        'status'                       => 'status',
        'synonymsDicts'                => 'synonymsDicts',
        'tags'                         => 'tags',
        'updatedAt'                    => 'updatedAt',
        'warmNode'                     => 'warmNode',
        'warmNodeConfiguration'        => 'warmNodeConfiguration',
        'zoneCount'                    => 'zoneCount',
        'zoneInfos'                    => 'zoneInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedDedicateMaster) {
            $res['advancedDedicateMaster'] = $this->advancedDedicateMaster;
        }
        if (null !== $this->advancedSetting) {
            $res['advancedSetting'] = null !== $this->advancedSetting ? $this->advancedSetting->toMap() : null;
        }
        if (null !== $this->aliwsDicts) {
            $res['aliwsDicts'] = [];
            if (null !== $this->aliwsDicts && \is_array($this->aliwsDicts)) {
                $n = 0;
                foreach ($this->aliwsDicts as $item) {
                    $res['aliwsDicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientNodeConfiguration) {
            $res['clientNodeConfiguration'] = null !== $this->clientNodeConfiguration ? $this->clientNodeConfiguration->toMap() : null;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->dataNode) {
            $res['dataNode'] = $this->dataNode;
        }
        if (null !== $this->dedicateMaster) {
            $res['dedicateMaster'] = $this->dedicateMaster;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->dictList) {
            $res['dictList'] = [];
            if (null !== $this->dictList && \is_array($this->dictList)) {
                $n = 0;
                foreach ($this->dictList as $item) {
                    $res['dictList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toMap() : null;
        }
        if (null !== $this->enableKibanaPrivateNetwork) {
            $res['enableKibanaPrivateNetwork'] = $this->enableKibanaPrivateNetwork;
        }
        if (null !== $this->enableKibanaPublicNetwork) {
            $res['enableKibanaPublicNetwork'] = $this->enableKibanaPublicNetwork;
        }
        if (null !== $this->enablePublic) {
            $res['enablePublic'] = $this->enablePublic;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->esConfig) {
            $res['esConfig'] = $this->esConfig;
        }
        if (null !== $this->esIPWhitelist) {
            $res['esIPWhitelist'] = $this->esIPWhitelist;
        }
        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }
        if (null !== $this->extendConfigs) {
            $res['extendConfigs'] = $this->extendConfigs;
        }
        if (null !== $this->haveClientNode) {
            $res['haveClientNode'] = $this->haveClientNode;
        }
        if (null !== $this->haveElasticDataNode) {
            $res['haveElasticDataNode'] = $this->haveElasticDataNode;
        }
        if (null !== $this->haveKibana) {
            $res['haveKibana'] = $this->haveKibana;
        }
        if (null !== $this->ikHotDicts) {
            $res['ikHotDicts'] = [];
            if (null !== $this->ikHotDicts && \is_array($this->ikHotDicts)) {
                $n = 0;
                foreach ($this->ikHotDicts as $item) {
                    $res['ikHotDicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->kibanaConfiguration) {
            $res['kibanaConfiguration'] = null !== $this->kibanaConfiguration ? $this->kibanaConfiguration->toMap() : null;
        }
        if (null !== $this->kibanaDomain) {
            $res['kibanaDomain'] = $this->kibanaDomain;
        }
        if (null !== $this->kibanaIPWhitelist) {
            $res['kibanaIPWhitelist'] = $this->kibanaIPWhitelist;
        }
        if (null !== $this->kibanaPort) {
            $res['kibanaPort'] = $this->kibanaPort;
        }
        if (null !== $this->kibanaPrivateDomain) {
            $res['kibanaPrivateDomain'] = $this->kibanaPrivateDomain;
        }
        if (null !== $this->kibanaPrivateIPWhitelist) {
            $res['kibanaPrivateIPWhitelist'] = $this->kibanaPrivateIPWhitelist;
        }
        if (null !== $this->kibanaPrivatePort) {
            $res['kibanaPrivatePort'] = $this->kibanaPrivatePort;
        }
        if (null !== $this->kibanaProtocol) {
            $res['kibanaProtocol'] = $this->kibanaProtocol;
        }
        if (null !== $this->masterConfiguration) {
            $res['masterConfiguration'] = null !== $this->masterConfiguration ? $this->masterConfiguration->toMap() : null;
        }
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->privateNetworkIpWhiteList) {
            $res['privateNetworkIpWhiteList'] = $this->privateNetworkIpWhiteList;
        }
        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->publicDomain) {
            $res['publicDomain'] = $this->publicDomain;
        }
        if (null !== $this->publicIpWhitelist) {
            $res['publicIpWhitelist'] = $this->publicIpWhitelist;
        }
        if (null !== $this->publicPort) {
            $res['publicPort'] = $this->publicPort;
        }
        if (null !== $this->readWritePolicy) {
            $res['readWritePolicy'] = null !== $this->readWritePolicy ? $this->readWritePolicy->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceVpc) {
            $res['serviceVpc'] = $this->serviceVpc;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->synonymsDicts) {
            $res['synonymsDicts'] = [];
            if (null !== $this->synonymsDicts && \is_array($this->synonymsDicts)) {
                $n = 0;
                foreach ($this->synonymsDicts as $item) {
                    $res['synonymsDicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->warmNode) {
            $res['warmNode'] = $this->warmNode;
        }
        if (null !== $this->warmNodeConfiguration) {
            $res['warmNodeConfiguration'] = null !== $this->warmNodeConfiguration ? $this->warmNodeConfiguration->toMap() : null;
        }
        if (null !== $this->zoneCount) {
            $res['zoneCount'] = $this->zoneCount;
        }
        if (null !== $this->zoneInfos) {
            $res['zoneInfos'] = [];
            if (null !== $this->zoneInfos && \is_array($this->zoneInfos)) {
                $n = 0;
                foreach ($this->zoneInfos as $item) {
                    $res['zoneInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Elasticsearch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['advancedDedicateMaster'])) {
            $model->advancedDedicateMaster = $map['advancedDedicateMaster'];
        }
        if (isset($map['advancedSetting'])) {
            $model->advancedSetting = advancedSetting::fromMap($map['advancedSetting']);
        }
        if (isset($map['aliwsDicts'])) {
            if (!empty($map['aliwsDicts'])) {
                $model->aliwsDicts = [];
                $n                 = 0;
                foreach ($map['aliwsDicts'] as $item) {
                    $model->aliwsDicts[$n++] = null !== $item ? DictInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['clientNodeConfiguration'])) {
            $model->clientNodeConfiguration = ClientNodeConfiguration::fromMap($map['clientNodeConfiguration']);
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['dataNode'])) {
            $model->dataNode = $map['dataNode'];
        }
        if (isset($map['dedicateMaster'])) {
            $model->dedicateMaster = $map['dedicateMaster'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['dictList'])) {
            if (!empty($map['dictList'])) {
                $model->dictList = [];
                $n               = 0;
                foreach ($map['dictList'] as $item) {
                    $model->dictList[$n++] = null !== $item ? DictInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = ElasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
        }
        if (isset($map['enableKibanaPrivateNetwork'])) {
            $model->enableKibanaPrivateNetwork = $map['enableKibanaPrivateNetwork'];
        }
        if (isset($map['enableKibanaPublicNetwork'])) {
            $model->enableKibanaPublicNetwork = $map['enableKibanaPublicNetwork'];
        }
        if (isset($map['enablePublic'])) {
            $model->enablePublic = $map['enablePublic'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['esConfig'])) {
            $model->esConfig = $map['esConfig'];
        }
        if (isset($map['esIPWhitelist'])) {
            if (!empty($map['esIPWhitelist'])) {
                $model->esIPWhitelist = $map['esIPWhitelist'];
            }
        }
        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }
        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = $map['extendConfigs'];
            }
        }
        if (isset($map['haveClientNode'])) {
            $model->haveClientNode = $map['haveClientNode'];
        }
        if (isset($map['haveElasticDataNode'])) {
            $model->haveElasticDataNode = $map['haveElasticDataNode'];
        }
        if (isset($map['haveKibana'])) {
            $model->haveKibana = $map['haveKibana'];
        }
        if (isset($map['ikHotDicts'])) {
            if (!empty($map['ikHotDicts'])) {
                $model->ikHotDicts = [];
                $n                 = 0;
                foreach ($map['ikHotDicts'] as $item) {
                    $model->ikHotDicts[$n++] = null !== $item ? DictInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['kibanaConfiguration'])) {
            $model->kibanaConfiguration = KibanaNodeConfiguration::fromMap($map['kibanaConfiguration']);
        }
        if (isset($map['kibanaDomain'])) {
            $model->kibanaDomain = $map['kibanaDomain'];
        }
        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = $map['kibanaIPWhitelist'];
            }
        }
        if (isset($map['kibanaPort'])) {
            $model->kibanaPort = $map['kibanaPort'];
        }
        if (isset($map['kibanaPrivateDomain'])) {
            $model->kibanaPrivateDomain = $map['kibanaPrivateDomain'];
        }
        if (isset($map['kibanaPrivateIPWhitelist'])) {
            if (!empty($map['kibanaPrivateIPWhitelist'])) {
                $model->kibanaPrivateIPWhitelist = $map['kibanaPrivateIPWhitelist'];
            }
        }
        if (isset($map['kibanaPrivatePort'])) {
            $model->kibanaPrivatePort = $map['kibanaPrivatePort'];
        }
        if (isset($map['kibanaProtocol'])) {
            $model->kibanaProtocol = $map['kibanaProtocol'];
        }
        if (isset($map['masterConfiguration'])) {
            $model->masterConfiguration = MasterNodeConfiguration::fromMap($map['masterConfiguration']);
        }
        if (isset($map['networkConfig'])) {
            $model->networkConfig = NetworkConfig::fromMap($map['networkConfig']);
        }
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = NodeSpec::fromMap($map['nodeSpec']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['privateNetworkIpWhiteList'])) {
            if (!empty($map['privateNetworkIpWhiteList'])) {
                $model->privateNetworkIpWhiteList = $map['privateNetworkIpWhiteList'];
            }
        }
        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['publicDomain'])) {
            $model->publicDomain = $map['publicDomain'];
        }
        if (isset($map['publicIpWhitelist'])) {
            if (!empty($map['publicIpWhitelist'])) {
                $model->publicIpWhitelist = $map['publicIpWhitelist'];
            }
        }
        if (isset($map['publicPort'])) {
            $model->publicPort = $map['publicPort'];
        }
        if (isset($map['readWritePolicy'])) {
            $model->readWritePolicy = ReadWritePolicy::fromMap($map['readWritePolicy']);
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['serviceVpc'])) {
            $model->serviceVpc = $map['serviceVpc'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['synonymsDicts'])) {
            if (!empty($map['synonymsDicts'])) {
                $model->synonymsDicts = [];
                $n                    = 0;
                foreach ($map['synonymsDicts'] as $item) {
                    $model->synonymsDicts[$n++] = null !== $item ? DictInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['warmNode'])) {
            $model->warmNode = $map['warmNode'];
        }
        if (isset($map['warmNodeConfiguration'])) {
            $model->warmNodeConfiguration = WarmNodeConfiguration::fromMap($map['warmNodeConfiguration']);
        }
        if (isset($map['zoneCount'])) {
            $model->zoneCount = $map['zoneCount'];
        }
        if (isset($map['zoneInfos'])) {
            if (!empty($map['zoneInfos'])) {
                $model->zoneInfos = [];
                $n                = 0;
                foreach ($map['zoneInfos'] as $item) {
                    $model->zoneInfos[$n++] = null !== $item ? ZoneInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
