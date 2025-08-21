<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\endpointList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\tags;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\zoneInfos;

class result extends Model
{
    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var zoneInfos[]
     */
    public $zoneInfos;

    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var endpointList[]
     */
    public $endpointList;

    /**
     * @var string
     */
    public $instanceId;

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
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'extendConfigs' => 'ExtendConfigs',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'zoneInfos' => 'ZoneInfos',
        'config' => 'config',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'endpointList' => 'endpointList',
        'instanceId' => 'instanceId',
        'networkConfig' => 'networkConfig',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'paymentType' => 'paymentType',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'version' => 'version',
        'vpcInstanceId' => 'vpcInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->extendConfigs)) {
            Model::validateArray($this->extendConfigs);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->zoneInfos)) {
            Model::validateArray($this->zoneInfos);
        }
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (\is_array($this->endpointList)) {
            Model::validateArray($this->endpointList);
        }
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        if (null !== $this->nodeSpec) {
            $this->nodeSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendConfigs) {
            if (\is_array($this->extendConfigs)) {
                $res['ExtendConfigs'] = [];
                $n1 = 0;
                foreach ($this->extendConfigs as $item1) {
                    if (\is_array($item1)) {
                        $res['ExtendConfigs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['ExtendConfigs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneInfos) {
            if (\is_array($this->zoneInfos)) {
                $res['ZoneInfos'] = [];
                $n1 = 0;
                foreach ($this->zoneInfos as $item1) {
                    $res['ZoneInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endpointList) {
            if (\is_array($this->endpointList)) {
                $res['endpointList'] = [];
                $n1 = 0;
                foreach ($this->endpointList as $item1) {
                    $res['endpointList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['ExtendConfigs'])) {
            if (!empty($map['ExtendConfigs'])) {
                $model->extendConfigs = [];
                $n1 = 0;
                foreach ($map['ExtendConfigs'] as $item1) {
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneInfos'])) {
            if (!empty($map['ZoneInfos'])) {
                $model->zoneInfos = [];
                $n1 = 0;
                foreach ($map['ZoneInfos'] as $item1) {
                    $model->zoneInfos[$n1] = zoneInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endpointList'])) {
            if (!empty($map['endpointList'])) {
                $model->endpointList = [];
                $n1 = 0;
                foreach ($map['endpointList'] as $item1) {
                    $model->endpointList[$n1] = endpointList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }

        return $model;
    }
}
