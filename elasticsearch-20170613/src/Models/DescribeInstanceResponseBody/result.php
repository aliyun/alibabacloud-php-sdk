<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeInstanceResponseBody;

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
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example true
     *
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
     * @var clientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @example 2018-07-13T03:58:07.253Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example false
     *
     * @var bool
     */
    public $dedicateMaster;

    /**
     * @example es-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @var dictList[]
     */
    public $dictList;

    /**
     * @example es-cn-3h4k3axh33th9****.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var elasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableKibanaPrivateNetwork;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableKibanaPublicNetwork;

    /**
     * @example true
     *
     * @var bool
     */
    public $enablePublic;

    /**
     * @example {"http.cors.allow-credentials":"false"}
     *
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
     * @example 6.3.2_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @example true
     *
     * @var bool
     */
    public $haveClientNode;

    /**
     * @example true
     *
     * @var bool
     */
    public $haveKibana;

    /**
     * @var ikHotDicts[]
     */
    public $ikHotDicts;

    /**
     * @example advanced
     *
     * @var string
     */
    public $instanceCategory;

    /**
     * @example es-cn-3h4k3axh33th9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isNewDeployment;

    /**
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @example es-cn-3h4k3axh33th9****.kibana.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $kibanaDomain;

    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;

    /**
     * @example 5601
     *
     * @var int
     */
    public $kibanaPort;

    /**
     * @var string[]
     */
    public $kibanaPrivateIPWhitelist;

    /**
     * @var masterConfiguration
     */
    public $masterConfiguration;

    /**
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 9200
     *
     * @var int
     */
    public $port;

    /**
     * @example active
     *
     * @var string
     */
    public $postpaidServiceStatus;

    /**
     * @var string[]
     */
    public $privateNetworkIpWhiteList;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $protocol;

    /**
     * @example es-cn-3h4k3axh33th9****.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $publicDomain;

    /**
     * @var string[]
     */
    public $publicIpWhitelist;

    /**
     * @example 9200
     *
     * @var int
     */
    public $publicPort;

    /**
     * @example rg-aekzvowej3i****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $serviceVpc;

    /**
     * @example active
     *
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
     * @example 2018-07-13T03:58:07.253Z
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example vpc-bp1uag5jj38c****
     *
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $warmNode;

    /**
     * @var warmNodeConfiguration
     */
    public $warmNodeConfiguration;

    /**
     * @example 2
     *
     * @var int
     */
    public $zoneCount;

    /**
     * @var zoneInfos[]
     */
    public $zoneInfos;
    protected $_name = [
        'advancedDedicateMaster'       => 'advancedDedicateMaster',
        'advancedSetting'              => 'advancedSetting',
        'aliwsDicts'                   => 'aliwsDicts',
        'clientNodeConfiguration'      => 'clientNodeConfiguration',
        'createdAt'                    => 'createdAt',
        'dedicateMaster'               => 'dedicateMaster',
        'description'                  => 'description',
        'dictList'                     => 'dictList',
        'domain'                       => 'domain',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'enableKibanaPrivateNetwork'   => 'enableKibanaPrivateNetwork',
        'enableKibanaPublicNetwork'    => 'enableKibanaPublicNetwork',
        'enablePublic'                 => 'enablePublic',
        'esConfig'                     => 'esConfig',
        'esIPBlacklist'                => 'esIPBlacklist',
        'esIPWhitelist'                => 'esIPWhitelist',
        'esVersion'                    => 'esVersion',
        'extendConfigs'                => 'extendConfigs',
        'haveClientNode'               => 'haveClientNode',
        'haveKibana'                   => 'haveKibana',
        'ikHotDicts'                   => 'ikHotDicts',
        'instanceCategory'             => 'instanceCategory',
        'instanceId'                   => 'instanceId',
        'isNewDeployment'              => 'isNewDeployment',
        'kibanaConfiguration'          => 'kibanaConfiguration',
        'kibanaDomain'                 => 'kibanaDomain',
        'kibanaIPWhitelist'            => 'kibanaIPWhitelist',
        'kibanaPort'                   => 'kibanaPort',
        'kibanaPrivateIPWhitelist'     => 'kibanaPrivateIPWhitelist',
        'masterConfiguration'          => 'masterConfiguration',
        'networkConfig'                => 'networkConfig',
        'nodeAmount'                   => 'nodeAmount',
        'nodeSpec'                     => 'nodeSpec',
        'paymentType'                  => 'paymentType',
        'port'                         => 'port',
        'postpaidServiceStatus'        => 'postpaidServiceStatus',
        'privateNetworkIpWhiteList'    => 'privateNetworkIpWhiteList',
        'protocol'                     => 'protocol',
        'publicDomain'                 => 'publicDomain',
        'publicIpWhitelist'            => 'publicIpWhitelist',
        'publicPort'                   => 'publicPort',
        'resourceGroupId'              => 'resourceGroupId',
        'serviceVpc'                   => 'serviceVpc',
        'status'                       => 'status',
        'synonymsDicts'                => 'synonymsDicts',
        'tags'                         => 'tags',
        'updatedAt'                    => 'updatedAt',
        'vpcInstanceId'                => 'vpcInstanceId',
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
        if (null !== $this->esConfig) {
            $res['esConfig'] = $this->esConfig;
        }
        if (null !== $this->esIPBlacklist) {
            $res['esIPBlacklist'] = $this->esIPBlacklist;
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
        if (null !== $this->kibanaPrivateIPWhitelist) {
            $res['kibanaPrivateIPWhitelist'] = $this->kibanaPrivateIPWhitelist;
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
        if (null !== $this->postpaidServiceStatus) {
            $res['postpaidServiceStatus'] = $this->postpaidServiceStatus;
        }
        if (null !== $this->privateNetworkIpWhiteList) {
            $res['privateNetworkIpWhiteList'] = $this->privateNetworkIpWhiteList;
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
        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
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
     * @return result
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
                    $model->aliwsDicts[$n++] = null !== $item ? aliwsDicts::fromMap($item) : $item;
                }
            }
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
                $n               = 0;
                foreach ($map['dictList'] as $item) {
                    $model->dictList[$n++] = null !== $item ? dictList::fromMap($item) : $item;
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
        if (isset($map['esConfig'])) {
            $model->esConfig = $map['esConfig'];
        }
        if (isset($map['esIPBlacklist'])) {
            if (!empty($map['esIPBlacklist'])) {
                $model->esIPBlacklist = $map['esIPBlacklist'];
            }
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
        if (isset($map['haveKibana'])) {
            $model->haveKibana = $map['haveKibana'];
        }
        if (isset($map['ikHotDicts'])) {
            if (!empty($map['ikHotDicts'])) {
                $model->ikHotDicts = [];
                $n                 = 0;
                foreach ($map['ikHotDicts'] as $item) {
                    $model->ikHotDicts[$n++] = null !== $item ? ikHotDicts::fromMap($item) : $item;
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
                $model->kibanaIPWhitelist = $map['kibanaIPWhitelist'];
            }
        }
        if (isset($map['kibanaPort'])) {
            $model->kibanaPort = $map['kibanaPort'];
        }
        if (isset($map['kibanaPrivateIPWhitelist'])) {
            if (!empty($map['kibanaPrivateIPWhitelist'])) {
                $model->kibanaPrivateIPWhitelist = $map['kibanaPrivateIPWhitelist'];
            }
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
                $model->privateNetworkIpWhiteList = $map['privateNetworkIpWhiteList'];
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
                $model->publicIpWhitelist = $map['publicIpWhitelist'];
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
                $n                    = 0;
                foreach ($map['synonymsDicts'] as $item) {
                    $model->synonymsDicts[$n++] = null !== $item ? synonymsDicts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
                $n                = 0;
                foreach ($map['zoneInfos'] as $item) {
                    $model->zoneInfos[$n++] = null !== $item ? zoneInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
