<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponseBody\result\dataNode;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponseBody\result\queryNode;

class result extends Model
{
    /**
     * @var mixed[][]
     */
    public $config;

    /**
     * @var string
     */
    public $configUpdateTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentAdvanceConfigVersion;

    /**
     * @var string
     */
    public $currentOnlineConfigVersion;

    /**
     * @var dataNode
     */
    public $dataNode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $latestAdvanceConfigVersion;

    /**
     * @var string
     */
    public $latestOnlineConfigVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var queryNode
     */
    public $queryNode;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'config' => 'config',
        'configUpdateTime' => 'configUpdateTime',
        'createTime' => 'createTime',
        'currentAdvanceConfigVersion' => 'currentAdvanceConfigVersion',
        'currentOnlineConfigVersion' => 'currentOnlineConfigVersion',
        'dataNode' => 'dataNode',
        'description' => 'description',
        'latestAdvanceConfigVersion' => 'latestAdvanceConfigVersion',
        'latestOnlineConfigVersion' => 'latestOnlineConfigVersion',
        'name' => 'name',
        'queryNode' => 'queryNode',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (null !== $this->dataNode) {
            $this->dataNode->validate();
        }
        if (null !== $this->queryNode) {
            $this->queryNode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->configUpdateTime) {
            $res['configUpdateTime'] = $this->configUpdateTime;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->currentAdvanceConfigVersion) {
            $res['currentAdvanceConfigVersion'] = $this->currentAdvanceConfigVersion;
        }

        if (null !== $this->currentOnlineConfigVersion) {
            $res['currentOnlineConfigVersion'] = $this->currentOnlineConfigVersion;
        }

        if (null !== $this->dataNode) {
            $res['dataNode'] = null !== $this->dataNode ? $this->dataNode->toArray($noStream) : $this->dataNode;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->latestAdvanceConfigVersion) {
            $res['latestAdvanceConfigVersion'] = $this->latestAdvanceConfigVersion;
        }

        if (null !== $this->latestOnlineConfigVersion) {
            $res['latestOnlineConfigVersion'] = $this->latestOnlineConfigVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->queryNode) {
            $res['queryNode'] = null !== $this->queryNode ? $this->queryNode->toArray($noStream) : $this->queryNode;
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
        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['configUpdateTime'])) {
            $model->configUpdateTime = $map['configUpdateTime'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentAdvanceConfigVersion'])) {
            $model->currentAdvanceConfigVersion = $map['currentAdvanceConfigVersion'];
        }

        if (isset($map['currentOnlineConfigVersion'])) {
            $model->currentOnlineConfigVersion = $map['currentOnlineConfigVersion'];
        }

        if (isset($map['dataNode'])) {
            $model->dataNode = dataNode::fromMap($map['dataNode']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['latestAdvanceConfigVersion'])) {
            $model->latestAdvanceConfigVersion = $map['latestAdvanceConfigVersion'];
        }

        if (isset($map['latestOnlineConfigVersion'])) {
            $model->latestOnlineConfigVersion = $map['latestOnlineConfigVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['queryNode'])) {
            $model->queryNode = queryNode::fromMap($map['queryNode']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
