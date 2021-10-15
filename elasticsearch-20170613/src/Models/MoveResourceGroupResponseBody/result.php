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
     * @var int
     */
    public $nodeAmount;

    /**
     * @var string
     */
    public $publicDomain;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $publicPort;

    /**
     * @var int
     */
    public $kibanaPort;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $esVersion;

    /**
     * @var string
     */
    public $kibanaDomain;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var dictList[]
     */
    public $dictList;

    /**
     * @var synonymsDicts[]
     */
    public $synonymsDicts;

    /**
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @var masterConfiguration
     */
    public $masterConfiguration;
    protected $_name = [
        'nodeAmount'          => 'nodeAmount',
        'publicDomain'        => 'publicDomain',
        'createdAt'           => 'createdAt',
        'status'              => 'status',
        'publicPort'          => 'publicPort',
        'kibanaPort'          => 'kibanaPort',
        'paymentType'         => 'paymentType',
        'domain'              => 'domain',
        'description'         => 'description',
        'esVersion'           => 'esVersion',
        'kibanaDomain'        => 'kibanaDomain',
        'updatedAt'           => 'updatedAt',
        'instanceId'          => 'instanceId',
        'dictList'            => 'dictList',
        'synonymsDicts'       => 'synonymsDicts',
        'nodeSpec'            => 'nodeSpec',
        'networkConfig'       => 'networkConfig',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'masterConfiguration' => 'masterConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->publicDomain) {
            $res['publicDomain'] = $this->publicDomain;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->publicPort) {
            $res['publicPort'] = $this->publicPort;
        }
        if (null !== $this->kibanaPort) {
            $res['kibanaPort'] = $this->kibanaPort;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }
        if (null !== $this->kibanaDomain) {
            $res['kibanaDomain'] = $this->kibanaDomain;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (null !== $this->synonymsDicts) {
            $res['synonymsDicts'] = [];
            if (null !== $this->synonymsDicts && \is_array($this->synonymsDicts)) {
                $n = 0;
                foreach ($this->synonymsDicts as $item) {
                    $res['synonymsDicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }
        if (null !== $this->kibanaConfiguration) {
            $res['kibanaConfiguration'] = null !== $this->kibanaConfiguration ? $this->kibanaConfiguration->toMap() : null;
        }
        if (null !== $this->masterConfiguration) {
            $res['masterConfiguration'] = null !== $this->masterConfiguration ? $this->masterConfiguration->toMap() : null;
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
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['publicDomain'])) {
            $model->publicDomain = $map['publicDomain'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['publicPort'])) {
            $model->publicPort = $map['publicPort'];
        }
        if (isset($map['kibanaPort'])) {
            $model->kibanaPort = $map['kibanaPort'];
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }
        if (isset($map['kibanaDomain'])) {
            $model->kibanaDomain = $map['kibanaDomain'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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
        if (isset($map['synonymsDicts'])) {
            if (!empty($map['synonymsDicts'])) {
                $model->synonymsDicts = [];
                $n                    = 0;
                foreach ($map['synonymsDicts'] as $item) {
                    $model->synonymsDicts[$n++] = null !== $item ? synonymsDicts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }
        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }
        if (isset($map['kibanaConfiguration'])) {
            $model->kibanaConfiguration = kibanaConfiguration::fromMap($map['kibanaConfiguration']);
        }
        if (isset($map['masterConfiguration'])) {
            $model->masterConfiguration = masterConfiguration::fromMap($map['masterConfiguration']);
        }

        return $model;
    }
}
