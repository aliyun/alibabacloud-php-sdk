<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateInstanceResponseBody\result\nodeSpec;

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
     * @var masterConfiguration
     */
    public $masterConfiguration;

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
    protected $_name = [
        'createdAt' => 'createdAt',
        'description' => 'description',
        'domain' => 'domain',
        'esVersion' => 'esVersion',
        'instanceId' => 'instanceId',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'masterConfiguration' => 'masterConfiguration',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'paymentType' => 'paymentType',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->kibanaConfiguration) {
            $this->kibanaConfiguration->validate();
        }
        if (null !== $this->masterConfiguration) {
            $this->masterConfiguration->validate();
        }
        if (null !== $this->nodeSpec) {
            $this->nodeSpec->validate();
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

        if (null !== $this->masterConfiguration) {
            $res['masterConfiguration'] = null !== $this->masterConfiguration ? $this->masterConfiguration->toArray($noStream) : $this->masterConfiguration;
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

        if (isset($map['masterConfiguration'])) {
            $model->masterConfiguration = masterConfiguration::fromMap($map['masterConfiguration']);
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

        return $model;
    }
}
