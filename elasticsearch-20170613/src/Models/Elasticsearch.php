<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Elasticsearch\advancedSetting;

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
        'advancedDedicateMaster' => 'advancedDedicateMaster',
        'advancedSetting' => 'advancedSetting',
        'aliwsDicts' => 'aliwsDicts',
        'clientNodeConfiguration' => 'clientNodeConfiguration',
        'createdAt' => 'createdAt',
        'dataNode' => 'dataNode',
        'dedicateMaster' => 'dedicateMaster',
        'description' => 'description',
        'dictList' => 'dictList',
        'domain' => 'domain',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'enableKibanaPrivateNetwork' => 'enableKibanaPrivateNetwork',
        'enableKibanaPublicNetwork' => 'enableKibanaPublicNetwork',
        'enablePublic' => 'enablePublic',
        'endTime' => 'endTime',
        'esConfig' => 'esConfig',
        'esIPWhitelist' => 'esIPWhitelist',
        'esVersion' => 'esVersion',
        'extendConfigs' => 'extendConfigs',
        'haveClientNode' => 'haveClientNode',
        'haveElasticDataNode' => 'haveElasticDataNode',
        'haveKibana' => 'haveKibana',
        'ikHotDicts' => 'ikHotDicts',
        'instanceId' => 'instanceId',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'kibanaDomain' => 'kibanaDomain',
        'kibanaIPWhitelist' => 'kibanaIPWhitelist',
        'kibanaPort' => 'kibanaPort',
        'kibanaPrivateDomain' => 'kibanaPrivateDomain',
        'kibanaPrivateIPWhitelist' => 'kibanaPrivateIPWhitelist',
        'kibanaPrivatePort' => 'kibanaPrivatePort',
        'kibanaProtocol' => 'kibanaProtocol',
        'masterConfiguration' => 'masterConfiguration',
        'networkConfig' => 'networkConfig',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'paymentType' => 'paymentType',
        'port' => 'port',
        'privateNetworkIpWhiteList' => 'privateNetworkIpWhiteList',
        'productType' => 'productType',
        'protocol' => 'protocol',
        'publicDomain' => 'publicDomain',
        'publicIpWhitelist' => 'publicIpWhitelist',
        'publicPort' => 'publicPort',
        'readWritePolicy' => 'readWritePolicy',
        'resourceGroupId' => 'resourceGroupId',
        'serviceVpc' => 'serviceVpc',
        'status' => 'status',
        'synonymsDicts' => 'synonymsDicts',
        'tags' => 'tags',
        'updatedAt' => 'updatedAt',
        'warmNode' => 'warmNode',
        'warmNodeConfiguration' => 'warmNodeConfiguration',
        'zoneCount' => 'zoneCount',
        'zoneInfos' => 'zoneInfos',
    ];

    public function validate()
    {
        if (null !== $this->advancedSetting) {
            $this->advancedSetting->validate();
        }
        if (\is_array($this->aliwsDicts)) {
            Model::validateArray($this->aliwsDicts);
        }
        if (null !== $this->clientNodeConfiguration) {
            $this->clientNodeConfiguration->validate();
        }
        if (\is_array($this->dictList)) {
            Model::validateArray($this->dictList);
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $this->elasticDataNodeConfiguration->validate();
        }
        if (\is_array($this->esConfig)) {
            Model::validateArray($this->esConfig);
        }
        if (\is_array($this->esIPWhitelist)) {
            Model::validateArray($this->esIPWhitelist);
        }
        if (\is_array($this->extendConfigs)) {
            Model::validateArray($this->extendConfigs);
        }
        if (\is_array($this->ikHotDicts)) {
            Model::validateArray($this->ikHotDicts);
        }
        if (null !== $this->kibanaConfiguration) {
            $this->kibanaConfiguration->validate();
        }
        if (\is_array($this->kibanaIPWhitelist)) {
            Model::validateArray($this->kibanaIPWhitelist);
        }
        if (\is_array($this->kibanaPrivateIPWhitelist)) {
            Model::validateArray($this->kibanaPrivateIPWhitelist);
        }
        if (null !== $this->masterConfiguration) {
            $this->masterConfiguration->validate();
        }
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        if (null !== $this->nodeSpec) {
            $this->nodeSpec->validate();
        }
        if (\is_array($this->privateNetworkIpWhiteList)) {
            Model::validateArray($this->privateNetworkIpWhiteList);
        }
        if (\is_array($this->publicIpWhitelist)) {
            Model::validateArray($this->publicIpWhitelist);
        }
        if (null !== $this->readWritePolicy) {
            $this->readWritePolicy->validate();
        }
        if (\is_array($this->synonymsDicts)) {
            Model::validateArray($this->synonymsDicts);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->warmNodeConfiguration) {
            $this->warmNodeConfiguration->validate();
        }
        if (\is_array($this->zoneInfos)) {
            Model::validateArray($this->zoneInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedDedicateMaster) {
            $res['advancedDedicateMaster'] = $this->advancedDedicateMaster;
        }

        if (null !== $this->advancedSetting) {
            $res['advancedSetting'] = null !== $this->advancedSetting ? $this->advancedSetting->toArray($noStream) : $this->advancedSetting;
        }

        if (null !== $this->aliwsDicts) {
            if (\is_array($this->aliwsDicts)) {
                $res['aliwsDicts'] = [];
                $n1 = 0;
                foreach ($this->aliwsDicts as $item1) {
                    $res['aliwsDicts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientNodeConfiguration) {
            $res['clientNodeConfiguration'] = null !== $this->clientNodeConfiguration ? $this->clientNodeConfiguration->toArray($noStream) : $this->clientNodeConfiguration;
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
            if (\is_array($this->dictList)) {
                $res['dictList'] = [];
                $n1 = 0;
                foreach ($this->dictList as $item1) {
                    $res['dictList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toArray($noStream) : $this->elasticDataNodeConfiguration;
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
            if (\is_array($this->esConfig)) {
                $res['esConfig'] = [];
                foreach ($this->esConfig as $key1 => $value1) {
                    $res['esConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->esIPWhitelist) {
            if (\is_array($this->esIPWhitelist)) {
                $res['esIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->esIPWhitelist as $item1) {
                    $res['esIPWhitelist'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }

        if (null !== $this->extendConfigs) {
            if (\is_array($this->extendConfigs)) {
                $res['extendConfigs'] = [];
                $n1 = 0;
                foreach ($this->extendConfigs as $item1) {
                    if (\is_array($item1)) {
                        $res['extendConfigs'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['extendConfigs'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
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
            if (\is_array($this->ikHotDicts)) {
                $res['ikHotDicts'] = [];
                $n1 = 0;
                foreach ($this->ikHotDicts as $item1) {
                    $res['ikHotDicts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->kibanaConfiguration) {
            $res['kibanaConfiguration'] = null !== $this->kibanaConfiguration ? $this->kibanaConfiguration->toArray($noStream) : $this->kibanaConfiguration;
        }

        if (null !== $this->kibanaDomain) {
            $res['kibanaDomain'] = $this->kibanaDomain;
        }

        if (null !== $this->kibanaIPWhitelist) {
            if (\is_array($this->kibanaIPWhitelist)) {
                $res['kibanaIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->kibanaIPWhitelist as $item1) {
                    $res['kibanaIPWhitelist'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->kibanaPort) {
            $res['kibanaPort'] = $this->kibanaPort;
        }

        if (null !== $this->kibanaPrivateDomain) {
            $res['kibanaPrivateDomain'] = $this->kibanaPrivateDomain;
        }

        if (null !== $this->kibanaPrivateIPWhitelist) {
            if (\is_array($this->kibanaPrivateIPWhitelist)) {
                $res['kibanaPrivateIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->kibanaPrivateIPWhitelist as $item1) {
                    $res['kibanaPrivateIPWhitelist'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->kibanaPrivatePort) {
            $res['kibanaPrivatePort'] = $this->kibanaPrivatePort;
        }

        if (null !== $this->kibanaProtocol) {
            $res['kibanaProtocol'] = $this->kibanaProtocol;
        }

        if (null !== $this->masterConfiguration) {
            $res['masterConfiguration'] = null !== $this->masterConfiguration ? $this->masterConfiguration->toArray($noStream) : $this->masterConfiguration;
        }

        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toArray($noStream) : $this->networkConfig;
        }

        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }

        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toArray($noStream) : $this->nodeSpec;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->privateNetworkIpWhiteList) {
            if (\is_array($this->privateNetworkIpWhiteList)) {
                $res['privateNetworkIpWhiteList'] = [];
                $n1 = 0;
                foreach ($this->privateNetworkIpWhiteList as $item1) {
                    $res['privateNetworkIpWhiteList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->publicIpWhitelist)) {
                $res['publicIpWhitelist'] = [];
                $n1 = 0;
                foreach ($this->publicIpWhitelist as $item1) {
                    $res['publicIpWhitelist'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->publicPort) {
            $res['publicPort'] = $this->publicPort;
        }

        if (null !== $this->readWritePolicy) {
            $res['readWritePolicy'] = null !== $this->readWritePolicy ? $this->readWritePolicy->toArray($noStream) : $this->readWritePolicy;
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
            if (\is_array($this->synonymsDicts)) {
                $res['synonymsDicts'] = [];
                $n1 = 0;
                foreach ($this->synonymsDicts as $item1) {
                    $res['synonymsDicts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['warmNodeConfiguration'] = null !== $this->warmNodeConfiguration ? $this->warmNodeConfiguration->toArray($noStream) : $this->warmNodeConfiguration;
        }

        if (null !== $this->zoneCount) {
            $res['zoneCount'] = $this->zoneCount;
        }

        if (null !== $this->zoneInfos) {
            if (\is_array($this->zoneInfos)) {
                $res['zoneInfos'] = [];
                $n1 = 0;
                foreach ($this->zoneInfos as $item1) {
                    $res['zoneInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['advancedDedicateMaster'])) {
            $model->advancedDedicateMaster = $map['advancedDedicateMaster'];
        }

        if (isset($map['advancedSetting'])) {
            $model->advancedSetting = advancedSetting::fromMap($map['advancedSetting']);
        }

        if (isset($map['aliwsDicts'])) {
            if (!empty($map['aliwsDicts'])) {
                $model->aliwsDicts = [];
                $n1 = 0;
                foreach ($map['aliwsDicts'] as $item1) {
                    $model->aliwsDicts[$n1++] = DictInfo::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['dictList'] as $item1) {
                    $model->dictList[$n1++] = DictInfo::fromMap($item1);
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
            if (!empty($map['esConfig'])) {
                $model->esConfig = [];
                foreach ($map['esConfig'] as $key1 => $value1) {
                    $model->esConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['esIPWhitelist'])) {
            if (!empty($map['esIPWhitelist'])) {
                $model->esIPWhitelist = [];
                $n1 = 0;
                foreach ($map['esIPWhitelist'] as $item1) {
                    $model->esIPWhitelist[$n1++] = $item1;
                }
            }
        }

        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }

        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = [];
                $n1 = 0;
                foreach ($map['extendConfigs'] as $item1) {
                    if (!empty($item1)) {
                        $model->extendConfigs[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->extendConfigs[$n1++][$key2] = $value2;
                        }
                    }
                }
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
                $n1 = 0;
                foreach ($map['ikHotDicts'] as $item1) {
                    $model->ikHotDicts[$n1++] = DictInfo::fromMap($item1);
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
                $model->kibanaIPWhitelist = [];
                $n1 = 0;
                foreach ($map['kibanaIPWhitelist'] as $item1) {
                    $model->kibanaIPWhitelist[$n1++] = $item1;
                }
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
                $model->kibanaPrivateIPWhitelist = [];
                $n1 = 0;
                foreach ($map['kibanaPrivateIPWhitelist'] as $item1) {
                    $model->kibanaPrivateIPWhitelist[$n1++] = $item1;
                }
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
                $model->privateNetworkIpWhiteList = [];
                $n1 = 0;
                foreach ($map['privateNetworkIpWhiteList'] as $item1) {
                    $model->privateNetworkIpWhiteList[$n1++] = $item1;
                }
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
                $model->publicIpWhitelist = [];
                $n1 = 0;
                foreach ($map['publicIpWhitelist'] as $item1) {
                    $model->publicIpWhitelist[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['synonymsDicts'] as $item1) {
                    $model->synonymsDicts[$n1++] = DictInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['zoneInfos'] as $item1) {
                    $model->zoneInfos[$n1++] = ZoneInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
