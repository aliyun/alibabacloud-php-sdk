<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\clientNodeConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\elasticDataNodeConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\tags;

class result extends Model
{
    /**
     * @var bool
     */
    public $advancedDedicateMaster;

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
     * @var string
     */
    public $domain;

    /**
     * @var elasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $esVersion;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $isNewDeployment;

    /**
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;

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
     * @var string
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
     * @var string[]
     */
    public $publicIpWhitelist;

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
    protected $_name = [
        'advancedDedicateMaster' => 'advancedDedicateMaster',
        'archType' => 'archType',
        'clientNodeConfiguration' => 'clientNodeConfiguration',
        'createdAt' => 'createdAt',
        'dedicateMaster' => 'dedicateMaster',
        'description' => 'description',
        'domain' => 'domain',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'endTime' => 'endTime',
        'esVersion' => 'esVersion',
        'extendConfigs' => 'extendConfigs',
        'instanceId' => 'instanceId',
        'isNewDeployment' => 'isNewDeployment',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'kibanaIPWhitelist' => 'kibanaIPWhitelist',
        'kibanaPrivateIPWhitelist' => 'kibanaPrivateIPWhitelist',
        'masterConfiguration' => 'masterConfiguration',
        'networkConfig' => 'networkConfig',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'paymentType' => 'paymentType',
        'port' => 'port',
        'postpaidServiceStatus' => 'postpaidServiceStatus',
        'privateNetworkIpWhiteList' => 'privateNetworkIpWhiteList',
        'protocol' => 'protocol',
        'publicIpWhitelist' => 'publicIpWhitelist',
        'resourceGroupId' => 'resourceGroupId',
        'serviceVpc' => 'serviceVpc',
        'status' => 'status',
        'tags' => 'tags',
        'updatedAt' => 'updatedAt',
        'vpcInstanceId' => 'vpcInstanceId',
    ];

    public function validate()
    {
        if (null !== $this->clientNodeConfiguration) {
            $this->clientNodeConfiguration->validate();
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $this->elasticDataNodeConfiguration->validate();
        }
        if (\is_array($this->extendConfigs)) {
            Model::validateArray($this->extendConfigs);
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedDedicateMaster) {
            $res['advancedDedicateMaster'] = $this->advancedDedicateMaster;
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

        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toArray($noStream) : $this->elasticDataNodeConfiguration;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
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
                        $res['extendConfigs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['extendConfigs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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

        if (null !== $this->kibanaIPWhitelist) {
            if (\is_array($this->kibanaIPWhitelist)) {
                $res['kibanaIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->kibanaIPWhitelist as $item1) {
                    $res['kibanaIPWhitelist'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kibanaPrivateIPWhitelist) {
            if (\is_array($this->kibanaPrivateIPWhitelist)) {
                $res['kibanaPrivateIPWhitelist'] = [];
                $n1 = 0;
                foreach ($this->kibanaPrivateIPWhitelist as $item1) {
                    $res['kibanaPrivateIPWhitelist'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                    $res['privateNetworkIpWhiteList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->publicIpWhitelist) {
            if (\is_array($this->publicIpWhitelist)) {
                $res['publicIpWhitelist'] = [];
                $n1 = 0;
                foreach ($this->publicIpWhitelist as $item1) {
                    $res['publicIpWhitelist'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
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

        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = elasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
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
                        $model->extendConfigs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->extendConfigs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
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

        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = [];
                $n1 = 0;
                foreach ($map['kibanaIPWhitelist'] as $item1) {
                    $model->kibanaIPWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['kibanaPrivateIPWhitelist'])) {
            if (!empty($map['kibanaPrivateIPWhitelist'])) {
                $model->kibanaPrivateIPWhitelist = [];
                $n1 = 0;
                foreach ($map['kibanaPrivateIPWhitelist'] as $item1) {
                    $model->kibanaPrivateIPWhitelist[$n1] = $item1;
                    ++$n1;
                }
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
                $model->privateNetworkIpWhiteList = [];
                $n1 = 0;
                foreach ($map['privateNetworkIpWhiteList'] as $item1) {
                    $model->privateNetworkIpWhiteList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['publicIpWhitelist'])) {
            if (!empty($map['publicIpWhitelist'])) {
                $model->publicIpWhitelist = [];
                $n1 = 0;
                foreach ($map['publicIpWhitelist'] as $item1) {
                    $model->publicIpWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }

        return $model;
    }
}
