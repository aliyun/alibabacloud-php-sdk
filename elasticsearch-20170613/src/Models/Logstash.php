<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Logstash\endpointList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Logstash\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Logstash\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Logstash\tags;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Logstash\zoneInfos;
use AlibabaCloud\Tea\Model;

class Logstash extends Model
{
    /**
     * @var string[]
     */
    public $config;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $dataNode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

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
    public $protocol;

    /**
     * @var string
     */
    public $resourceGroupId;

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
    public $version;

    /**
     * @var int
     */
    public $zoneCount;

    /**
     * @var zoneInfos[]
     */
    public $zoneInfos;
    protected $_name = [
        'config'          => 'config',
        'createdAt'       => 'createdAt',
        'dataNode'        => 'dataNode',
        'description'     => 'description',
        'endTime'         => 'endTime',
        'endpointList'    => 'endpointList',
        'instanceId'      => 'instanceId',
        'networkConfig'   => 'networkConfig',
        'nodeAmount'      => 'nodeAmount',
        'nodeSpec'        => 'nodeSpec',
        'paymentType'     => 'paymentType',
        'protocol'        => 'protocol',
        'resourceGroupId' => 'resourceGroupId',
        'status'          => 'status',
        'tags'            => 'tags',
        'updatedAt'       => 'updatedAt',
        'version'         => 'version',
        'zoneCount'       => 'zoneCount',
        'zoneInfos'       => 'zoneInfos',
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
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->dataNode) {
            $res['dataNode'] = $this->dataNode;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
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
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
     * @return Logstash
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['dataNode'])) {
            $model->dataNode = $map['dataNode'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
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
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
        if (isset($map['version'])) {
            $model->version = $map['version'];
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
