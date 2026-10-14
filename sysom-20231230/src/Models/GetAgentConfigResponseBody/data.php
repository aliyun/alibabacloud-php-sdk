<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\GetAgentConfigResponseBody\data\resource;

class data extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'configId' => 'configId',
        'configName' => 'configName',
        'configType' => 'configType',
        'content' => 'content',
        'createdAt' => 'createdAt',
        'resource' => 'resource',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['configId'] = $this->configId;
        }

        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }

        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
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
        if (isset($map['configId'])) {
            $model->configId = $map['configId'];
        }

        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }

        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['resource'])) {
            $model->resource = resource::fromMap($map['resource']);
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
