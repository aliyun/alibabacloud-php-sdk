<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\advancedSetting;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\aliwsDicts;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\clientNodeConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\dictList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\elasticDataNodeConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\ikHotDicts;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\synonymsDicts;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\tags;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\warmNodeConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody\result\zoneInfos;

class result extends Model
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
     * @var aliwsDicts[]
     */
    public $aliwsDicts;

    /**
     * @var string
     */
    public $archType;

    /**
     * @var clientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $dedicateMaster;

    /**
     * @var string
     */
    public $description;

    /**
     * @var dictList[]
     */
    public $dictList;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var elasticDataNodeConfiguration
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
    public $endtime;

    /**
     * @var mixed[]
     */
    public $esConfig;

    /**
     * @var string[]
     */
    public $esIPBlacklist;

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
    public $haveKibana;

    /**
     * @var ikHotDicts[]
     */
    public $ikHotDicts;

    /**
     * @var string
     */
    public $instanceCategory;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isNewDeployment;

    /**
     * @var kibanaConfiguration
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
     * @var string
     */
    public $kibanaPrivatePort;

    /**
     * @var masterConfiguration
     */
    public $masterConfiguration;

    /**
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var nodeSpec
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
     * @var string
     */
    public $postpaidServiceStatus;

    /**
     * @var string[]
     */
    public $privateNetworkIpWhiteList;

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
     * @var synonymsDicts[]
     */
    public $synonymsDicts;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var bool
     */
    public $warmNode;

    /**
     * @var warmNodeConfiguration
     */
    public $warmNodeConfiguration;

    /**
     * @var int
     */
    public $zoneCount;

    /**
     * @var zoneInfos[]
     */
    public $zoneInfos;
    protected $_name = [
        'advancedDedicateMaster' => 'advancedDedicateMaster',
        'advancedSetting' => 'advancedSetting',
        'aliwsDicts' => 'aliwsDicts',
        'archType' => 'archType',
        'clientNodeConfiguration' => 'clientNodeConfiguration',
        'createdAt' => 'createdAt',
        'dedicateMaster' => 'dedicateMaster',
        'description' => 'description',
        'dictList' => 'dictList',
        'domain' => 'domain',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'enableKibanaPrivateNetwork' => 'enableKibanaPrivateNetwork',
        'enableKibanaPublicNetwork' => 'enableKibanaPublicNetwork',
        'enablePublic' => 'enablePublic',
        'endtime' => 'endtime',
        'esConfig' => 'esConfig',
        'esIPBlacklist' => 'esIPBlacklist',
        'esIPWhitelist' => 'esIPWhitelist',
        'esVersion' => 'esVersion',
        'extendConfigs' => 'extendConfigs',
        'haveClientNode' => 'haveClientNode',
        'haveKibana' => 'haveKibana',
        'ikHotDicts' => 'ikHotDicts',
        'instanceCategory' => 'instanceCategory',
        'instanceId' => 'instanceId',
        'isNewDeployment' => 'isNewDeployment',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'kibanaDomain' => 'kibanaDomain',
        'kibanaIPWhitelist' => 'kibanaIPWhitelist',
        'kibanaPort' => 'kibanaPort',
        'kibanaPrivateDomain' => 'kibanaPrivateDomain',
        'kibanaPrivateIPWhitelist' => 'kibanaPrivateIPWhitelist',
        'kibanaPrivatePort' => 'kibanaPrivatePort',
        'masterConfiguration' => 'masterConfiguration',
        'networkConfig' => 'networkConfig',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'paymentType' => 'paymentType',
        'port' => 'port',
        'postpaidServiceStatus' => 'postpaidServiceStatus',
        'privateNetworkIpWhiteList' => 'privateNetworkIpWhiteList',
        'protocol' => 'protocol',
        'publicDomain' => 'publicDomain',
        'publicIpWhitelist' => 'publicIpWhitelist',
        'publicPort' => 'publicPort',
        'resourceGroupId' => 'resourceGroupId',
        'serviceVpc' => 'serviceVpc',
        'status' => 'status',
        'synonymsDicts' => 'synonymsDicts',
        'tags' => 'tags',
        'updatedAt' => 'updatedAt',
        'vpcInstanceId' => 'vpcInstanceId',
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
        if (\is_array($this->esIPBlacklist)) {
            Model::validateArray($this->esIPBlacklist);
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

        if (null !== $this->archType) {
            $res['archType'] = $this->archType;
        }

        if (null !== $this->clientNodeConfiguration) {
            $res['clientNodeConfiguration'] = null !== $this->clientNodeConfiguration ? $this->clientNodeConfiguration->toArray($noStream) : $this->clientNodeConfiguration;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
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

        if (null !== $this->endtime) {
            $res['endtime'] = $this->endtime;
        }

        if (null !== $this->esConfig) {
            if (\is_array($this->esConfig)) {
                $res['esConfig'] = [];
                foreach ($this->esConfig as $key1 => $value1) {
                    $res['esConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->esIPBlacklist) {
            if (\is_array($this->esIPBlacklist)) {
                $res['esIPBlacklist'] = [];
                $n1 = 0;
                foreach ($this->esIPBlacklist as $item1) {
                    $res['esIPBlacklist'][$n1++] = $item1;
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

        if (null !== $this->instanceCategory) {
            $res['instanceCategory'] = $this->instanceCategory;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->isNewDeployment) {
            $res['isNewDeployment'] = $this->isNewDeployment;
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

        if (null !== $this->postpaidServiceStatus) {
            $res['postpaidServiceStatus'] = $this->postpaidServiceStatus;
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

        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
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
                    $model->aliwsDicts[$n1++] = aliwsDicts::fromMap($item1);
                }
            }
        }

        if (isset($map['archType'])) {
            $model->archType = $map['archType'];
        }

        if (isset($map['clientNodeConfiguration'])) {
            $model->clientNodeConfiguration = clientNodeConfiguration::fromMap($map['clientNodeConfiguration']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
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
                    $model->dictList[$n1++] = dictList::fromMap($item1);
                }
            }
        }

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = elasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
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

        if (isset($map['endtime'])) {
            $model->endtime = $map['endtime'];
        }

        if (isset($map['esConfig'])) {
            if (!empty($map['esConfig'])) {
                $model->esConfig = [];
                foreach ($map['esConfig'] as $key1 => $value1) {
                    $model->esConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['esIPBlacklist'])) {
            if (!empty($map['esIPBlacklist'])) {
                $model->esIPBlacklist = [];
                $n1 = 0;
                foreach ($map['esIPBlacklist'] as $item1) {
                    $model->esIPBlacklist[$n1++] = $item1;
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

        if (isset($map['haveKibana'])) {
            $model->haveKibana = $map['haveKibana'];
        }

        if (isset($map['ikHotDicts'])) {
            if (!empty($map['ikHotDicts'])) {
                $model->ikHotDicts = [];
                $n1 = 0;
                foreach ($map['ikHotDicts'] as $item1) {
                    $model->ikHotDicts[$n1++] = ikHotDicts::fromMap($item1);
                }
            }
        }

        if (isset($map['instanceCategory'])) {
            $model->instanceCategory = $map['instanceCategory'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['isNewDeployment'])) {
            $model->isNewDeployment = $map['isNewDeployment'];
        }

        if (isset($map['kibanaConfiguration'])) {
            $model->kibanaConfiguration = kibanaConfiguration::fromMap($map['kibanaConfiguration']);
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

        if (isset($map['masterConfiguration'])) {
            $model->masterConfiguration = masterConfiguration::fromMap($map['masterConfiguration']);
        }

        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }

        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }

        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['postpaidServiceStatus'])) {
            $model->postpaidServiceStatus = $map['postpaidServiceStatus'];
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
                    $model->synonymsDicts[$n1++] = synonymsDicts::fromMap($item1);
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }

        if (isset($map['warmNode'])) {
            $model->warmNode = $map['warmNode'];
        }

        if (isset($map['warmNodeConfiguration'])) {
            $model->warmNodeConfiguration = warmNodeConfiguration::fromMap($map['warmNodeConfiguration']);
        }

        if (isset($map['zoneCount'])) {
            $model->zoneCount = $map['zoneCount'];
        }

        if (isset($map['zoneInfos'])) {
            if (!empty($map['zoneInfos'])) {
                $model->zoneInfos = [];
                $n1 = 0;
                foreach ($map['zoneInfos'] as $item1) {
                    $model->zoneInfos[$n1++] = zoneInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
