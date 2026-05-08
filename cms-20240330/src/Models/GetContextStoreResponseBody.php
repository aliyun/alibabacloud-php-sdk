<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextStoreResponseBody\config;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetContextStoreResponseBody\dataset;

class GetContextStoreResponseBody extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $contextStoreName;

    /**
     * @var string
     */
    public $contextType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'config' => 'config',
        'contextStoreName' => 'contextStoreName',
        'contextType' => 'contextType',
        'createTime' => 'createTime',
        'dataset' => 'dataset',
        'description' => 'description',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'status' => 'status',
        'updateTime' => 'updateTime',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->contextStoreName) {
            $res['contextStoreName'] = $this->contextStoreName;
        }

        if (null !== $this->contextType) {
            $res['contextType'] = $this->contextType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dataset) {
            $res['dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }

        if (isset($map['contextStoreName'])) {
            $model->contextStoreName = $map['contextStoreName'];
        }

        if (isset($map['contextType'])) {
            $model->contextType = $map['contextType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dataset'])) {
            $model->dataset = dataset::fromMap($map['dataset']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
