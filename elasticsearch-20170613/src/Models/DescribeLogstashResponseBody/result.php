<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\endpointList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\tags;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result\zoneInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var mixed[]
     */
    public $config;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcInstanceId;

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
    public $instanceId;

    /**
     * @var endpointList[]
     */
    public $endpointList;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var zoneInfos[]
     */
    public $zoneInfos;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @var networkConfig
     */
    public $networkConfig;
    protected $_name = [
        'config'          => 'config',
        'paymentType'     => 'paymentType',
        'resourceGroupId' => 'ResourceGroupId',
        'nodeAmount'      => 'nodeAmount',
        'description'     => 'description',
        'createdAt'       => 'createdAt',
        'status'          => 'status',
        'vpcInstanceId'   => 'vpcInstanceId',
        'updatedAt'       => 'updatedAt',
        'version'         => 'version',
        'instanceId'      => 'instanceId',
        'endpointList'    => 'endpointList',
        'tags'            => 'Tags',
        'zoneInfos'       => 'ZoneInfos',
        'extendConfigs'   => 'ExtendConfigs',
        'nodeSpec'        => 'nodeSpec',
        'networkConfig'   => 'networkConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->endpointList) {
            $res['endpointList'] = [];
            if (null !== $this->endpointList && \is_array($this->endpointList)) {
                $n = 0;
                foreach ($this->endpointList as $item) {
                    $res['endpointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->zoneInfos) {
            $res['ZoneInfos'] = [];
            if (null !== $this->zoneInfos && \is_array($this->zoneInfos)) {
                $n = 0;
                foreach ($this->zoneInfos as $item) {
                    $res['ZoneInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extendConfigs) {
            $res['ExtendConfigs'] = $this->extendConfigs;
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['endpointList'])) {
            if (!empty($map['endpointList'])) {
                $model->endpointList = [];
                $n                   = 0;
                foreach ($map['endpointList'] as $item) {
                    $model->endpointList[$n++] = null !== $item ? endpointList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ZoneInfos'])) {
            if (!empty($map['ZoneInfos'])) {
                $model->zoneInfos = [];
                $n                = 0;
                foreach ($map['ZoneInfos'] as $item) {
                    $model->zoneInfos[$n++] = null !== $item ? zoneInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExtendConfigs'])) {
            if (!empty($map['ExtendConfigs'])) {
                $model->extendConfigs = $map['ExtendConfigs'];
            }
        }
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }
        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }

        return $model;
    }
}
