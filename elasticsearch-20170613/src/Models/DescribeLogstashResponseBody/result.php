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
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @example rg-aekzvowej3i****
     *
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
     * @example {"slowlog.threshold.warn": "2s","slowlog.threshold.info": "1s","slowlog.threshold.debug": "500ms","slowlog.threshold.trace": "100ms" }
     *
     * @var mixed[]
     */
    public $config;

    /**
     * @example 2020-02-06T14:12:03.672Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example ls-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @var endpointList[]
     */
    public $endpointList;

    /**
     * @example ls-cn-abc
     *
     * @var string
     */
    public $instanceId;

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
     * @example prepaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @example 2020-02-06T14:22:36.850Z
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example 7.4.0_with_X-Pack
     *
     * @var string
     */
    public $version;

    /**
     * @example vpc-bp16k1dvzxtmagcva****
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'extendConfigs'   => 'ExtendConfigs',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
        'zoneInfos'       => 'ZoneInfos',
        'config'          => 'config',
        'createdAt'       => 'createdAt',
        'description'     => 'description',
        'endpointList'    => 'endpointList',
        'instanceId'      => 'instanceId',
        'networkConfig'   => 'networkConfig',
        'nodeAmount'      => 'nodeAmount',
        'nodeSpec'        => 'nodeSpec',
        'paymentType'     => 'paymentType',
        'status'          => 'status',
        'updatedAt'       => 'updatedAt',
        'version'         => 'version',
        'vpcInstanceId'   => 'vpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendConfigs) {
            $res['ExtendConfigs'] = $this->extendConfigs;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtendConfigs'])) {
            if (!empty($map['ExtendConfigs'])) {
                $model->extendConfigs = $map['ExtendConfigs'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
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
                $n                   = 0;
                foreach ($map['endpointList'] as $item) {
                    $model->endpointList[$n++] = null !== $item ? endpointList::fromMap($item) : $item;
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
