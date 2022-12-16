<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceRequest extends Model
{
    /**
     * @example aliyunes_test1
     *
     * @var string
     */
    public $description;

    /**
     * @example 6.7_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @example advanced
     *
     * @var string
     */
    public $instanceCategory;

    /**
     * @example es-cn-v641a0ta3000g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example rg-aekzvowej3i****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example [{"tagKey":"key1","tagValue":"value1"}]
     *
     * @var string
     */
    public $tags;

    /**
     * @example vpc-bp16k1dvzxtmagcva****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'description'      => 'description',
        'esVersion'        => 'esVersion',
        'instanceCategory' => 'instanceCategory',
        'instanceId'       => 'instanceId',
        'page'             => 'page',
        'paymentType'      => 'paymentType',
        'resourceGroupId'  => 'resourceGroupId',
        'size'             => 'size',
        'tags'             => 'tags',
        'vpcId'            => 'vpcId',
        'zoneId'           => 'zoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }
        if (null !== $this->instanceCategory) {
            $res['instanceCategory'] = $this->instanceCategory;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }
        if (isset($map['instanceCategory'])) {
            $model->instanceCategory = $map['instanceCategory'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
