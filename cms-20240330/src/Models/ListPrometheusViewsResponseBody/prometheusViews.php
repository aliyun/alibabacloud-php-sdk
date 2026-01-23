<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListPrometheusViewsResponseBody;

use AlibabaCloud\Dara\Model;

class prometheusViews extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $product;

    /**
     * @var int
     */
    public $prometheusInstanceCount;

    /**
     * @var string
     */
    public $prometheusViewId;

    /**
     * @var string
     */
    public $prometheusViewName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'createTime' => 'createTime',
        'instanceType' => 'instanceType',
        'paymentType' => 'paymentType',
        'product' => 'product',
        'prometheusInstanceCount' => 'prometheusInstanceCount',
        'prometheusViewId' => 'prometheusViewId',
        'prometheusViewName' => 'prometheusViewName',
        'regionId' => 'regionId',
        'resourceType' => 'resourceType',
        'status' => 'status',
        'userId' => 'userId',
        'version' => 'version',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->product) {
            $res['product'] = $this->product;
        }

        if (null !== $this->prometheusInstanceCount) {
            $res['prometheusInstanceCount'] = $this->prometheusInstanceCount;
        }

        if (null !== $this->prometheusViewId) {
            $res['prometheusViewId'] = $this->prometheusViewId;
        }

        if (null !== $this->prometheusViewName) {
            $res['prometheusViewName'] = $this->prometheusViewName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        if (isset($map['prometheusInstanceCount'])) {
            $model->prometheusInstanceCount = $map['prometheusInstanceCount'];
        }

        if (isset($map['prometheusViewId'])) {
            $model->prometheusViewId = $map['prometheusViewId'];
        }

        if (isset($map['prometheusViewName'])) {
            $model->prometheusViewName = $map['prometheusViewName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
