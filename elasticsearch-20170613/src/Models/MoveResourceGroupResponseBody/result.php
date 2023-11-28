<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\dictList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\synonymsDicts;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the cluster was created.
     *
     * @example 2020-07-06T10:18:48.662Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description The name of the cluster.
     *
     * @example es-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The configurations of IK dictionaries.
     *
     * @var dictList[]
     */
    public $dictList;

    /**
     * @description The internal endpoint of the cluster.
     *
     * @example es-cn-nif1q8auz0003****.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The version of the cluster.
     *
     * @example 6.7.0_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @description The ID of the cluster.
     *
     * @example es-cn-n6w1o1x0w001c****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configurations of Kibana nodes.
     *
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @description The public endpoint of the Kibana console of the cluster.
     *
     * @example es-cn-nif1q8auz0003****.kibana.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $kibanaDomain;

    /**
     * @description The port number that is used to access the Kibana console of the cluster over the Internet.
     *
     * @example 5601
     *
     * @var int
     */
    public $kibanaPort;

    /**
     * @description The configurations of dedicated master nodes.
     *
     * @var masterConfiguration
     */
    public $masterConfiguration;

    /**
     * @description The network configurations.
     *
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @description The number of data nodes in the cluster.
     *
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @description The configurations of data nodes.
     *
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   prepaid: subscription
     *   postpaid: pay-as-you-go
     *
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The public endpoint of the cluster.
     *
     * @example es-cn-n6w1o1x0w001c****.public.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $publicDomain;

    /**
     * @description The port number that is used to access the cluster over the Internet.
     *
     * @example 9200
     *
     * @var int
     */
    public $publicPort;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   active: The cluster is normal.
     *   activating: The cluster is being activated.
     *   Inactive: The cluster is frozen.
     *   invalid: The cluster is valid.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The configurations of synonym dictionaries.
     *
     * @var synonymsDicts[]
     */
    public $synonymsDicts;

    /**
     * @description The time when the cluster was last updated.
     *
     * @example 2018-07-18T10:10:04.484Z
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt'           => 'createdAt',
        'description'         => 'description',
        'dictList'            => 'dictList',
        'domain'              => 'domain',
        'esVersion'           => 'esVersion',
        'instanceId'          => 'instanceId',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'kibanaDomain'        => 'kibanaDomain',
        'kibanaPort'          => 'kibanaPort',
        'masterConfiguration' => 'masterConfiguration',
        'networkConfig'       => 'networkConfig',
        'nodeAmount'          => 'nodeAmount',
        'nodeSpec'            => 'nodeSpec',
        'paymentType'         => 'paymentType',
        'publicDomain'        => 'publicDomain',
        'publicPort'          => 'publicPort',
        'status'              => 'status',
        'synonymsDicts'       => 'synonymsDicts',
        'updatedAt'           => 'updatedAt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
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
        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
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
        if (null !== $this->kibanaPort) {
            $res['kibanaPort'] = $this->kibanaPort;
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
        if (null !== $this->publicDomain) {
            $res['publicDomain'] = $this->publicDomain;
        }
        if (null !== $this->publicPort) {
            $res['publicPort'] = $this->publicPort;
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
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
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
        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['kibanaConfiguration'])) {
            $model->kibanaConfiguration = kibanaConfiguration::fromMap($map['kibanaConfiguration']);
        }
        if (isset($map['kibanaDomain'])) {
            $model->kibanaDomain = $map['kibanaDomain'];
        }
        if (isset($map['kibanaPort'])) {
            $model->kibanaPort = $map['kibanaPort'];
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
        if (isset($map['publicDomain'])) {
            $model->publicDomain = $map['publicDomain'];
        }
        if (isset($map['publicPort'])) {
            $model->publicPort = $map['publicPort'];
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
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
