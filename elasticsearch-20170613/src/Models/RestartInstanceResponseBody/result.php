<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody\result\dictList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\RestartInstanceResponseBody\result\synonymsDicts;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the instance was created.
     *
     * @example 2020-07-06T10:18:48.662Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description The name of the instance.
     *
     * @example es-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The configuration of the IK dictionaries.
     *
     * @var dictList[]
     */
    public $dictList;

    /**
     * @description The intranet access address of the instance.
     *
     * @example es-cn-nif1q8auz0003****.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The version of the instance.
     *
     * @example 6.7.0_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @description The ID of the instance.
     *
     * @example es-cn-n6w1o1x0w001c****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configuration of Kibana nodes.
     *
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @description The public network access address of Kibana.
     *
     * @example es-cn-nif1q8auz0003****.kibana.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $kibanaDomain;

    /**
     * @description The public port of the Kibana network.
     *
     * @example 5601
     *
     * @var int
     */
    public $kibanaPort;

    /**
     * @description The configuration of dedicated master nodes.
     *
     * @var masterConfiguration
     */
    public $masterConfiguration;

    /**
     * @description The network configuration.
     *
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @description The number of data nodes.
     *
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @description The configuration of data nodes.
     *
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @description The billing method of the created ECS instance.
     *
     * Valid values: prepaid and postpaid.
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The public network access address.
     *
     * @example es-cn-n6w1o1x0w001c****.public.elasticsearch.aliyuncs.com
     *
     * @var string
     */
    public $publicDomain;

    /**
     * @description The public network port.
     *
     * @example 9200
     *
     * @var int
     */
    public $publicPort;

    /**
     * @description The state of the cluster.
     *
     * Supported: active (normal), activating (initializing), inactive (blocked), and invalid (expired).
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The configuration of the synonym dictionaries.
     *
     * @var synonymsDicts[]
     */
    public $synonymsDicts;

    /**
     * @description The time when the instance was last updated.
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
