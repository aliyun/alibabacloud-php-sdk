<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\dictList;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\MoveResourceGroupResponseBody\result\synonymsDicts;

class result extends Model
{
    /**
     * @var string
     */
    public $createdAt;

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
     * @var string
     */
    public $esVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @var string
     */
    public $kibanaDomain;

    /**
     * @var int
     */
    public $kibanaPort;

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
    public $publicDomain;

    /**
     * @var int
     */
    public $publicPort;

    /**
     * @var string
     */
    public $status;

    /**
     * @var synonymsDicts[]
     */
    public $synonymsDicts;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'description' => 'description',
        'dictList' => 'dictList',
        'domain' => 'domain',
        'esVersion' => 'esVersion',
        'instanceId' => 'instanceId',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'kibanaDomain' => 'kibanaDomain',
        'kibanaPort' => 'kibanaPort',
        'masterConfiguration' => 'masterConfiguration',
        'networkConfig' => 'networkConfig',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'paymentType' => 'paymentType',
        'publicDomain' => 'publicDomain',
        'publicPort' => 'publicPort',
        'status' => 'status',
        'synonymsDicts' => 'synonymsDicts',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->dictList)) {
            Model::validateArray($this->dictList);
        }
        if (null !== $this->kibanaConfiguration) {
            $this->kibanaConfiguration->validate();
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
        if (\is_array($this->synonymsDicts)) {
            Model::validateArray($this->synonymsDicts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
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

        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
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

        if (null !== $this->kibanaPort) {
            $res['kibanaPort'] = $this->kibanaPort;
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
            if (\is_array($this->synonymsDicts)) {
                $res['synonymsDicts'] = [];
                $n1 = 0;
                foreach ($this->synonymsDicts as $item1) {
                    $res['synonymsDicts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
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
                $n1 = 0;
                foreach ($map['synonymsDicts'] as $item1) {
                    $model->synonymsDicts[$n1++] = synonymsDicts::fromMap($item1);
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
