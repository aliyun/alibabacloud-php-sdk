<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponseBody\result\dataNode;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponseBody\result\queryNode;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var mixed[][]
     */
    public $config;

    /**
     * @description The time when the configuration was updated.
     *
     * @example " "
     *
     * @var string
     */
    public $configUpdateTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @description The effective advanced version.
     *
     * @example " "
     *
     * @var string
     */
    public $currentAdvanceConfigVersion;

    /**
     * @description 词典配置生效版本
     *
     * @var string
     */
    public $currentOfflineDictConfigVersion;

    /**
     * @description The effective online configuration version.
     *
     * @example " "
     *
     * @var string
     */
    public $currentOnlineConfigVersion;

    /**
     * @description 查询配置生效版本
     *
     * @var string
     */
    public $currentOnlineQueryConfigVersion;

    /**
     * @description The information about the node in the cluster.
     *
     * @var dataNode
     */
    public $dataNode;

    /**
     * @description The description of the cluster.
     *
     * @example fzz_test
     *
     * @var string
     */
    public $description;

    /**
     * @description The latest advanced configuration version.
     *
     * @example " "
     *
     * @var string
     */
    public $latestAdvanceConfigVersion;

    /**
     * @description 词典配置最新版本
     *
     * @var string
     */
    public $latestOfflineDictConfigVersion;

    /**
     * @description The latest online configuration version.
     *
     * @example " "
     *
     * @var string
     */
    public $latestOnlineConfigVersion;

    /**
     * @description 查询配置最新版本
     *
     * @var string
     */
    public $latestOnlineQueryConfigVersion;

    /**
     * @description The name of the cluster.
     *
     * @example ha-cn-7pp2pcna701_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The query node of the cluster.
     *
     * @var queryNode
     */
    public $queryNode;

    /**
     * @description The status of the cluster. Valid values: running, starting, stopping, and stopped. running indicates the cluster is running, starting indicates the cluster is starting, stopping indicates the cluster is stopping, and stopped indicates the cluster has stopped.
     *
     * @example "starting"
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'config'                          => 'config',
        'configUpdateTime'                => 'configUpdateTime',
        'createTime'                      => 'createTime',
        'currentAdvanceConfigVersion'     => 'currentAdvanceConfigVersion',
        'currentOfflineDictConfigVersion' => 'currentOfflineDictConfigVersion',
        'currentOnlineConfigVersion'      => 'currentOnlineConfigVersion',
        'currentOnlineQueryConfigVersion' => 'currentOnlineQueryConfigVersion',
        'dataNode'                        => 'dataNode',
        'description'                     => 'description',
        'latestAdvanceConfigVersion'      => 'latestAdvanceConfigVersion',
        'latestOfflineDictConfigVersion'  => 'latestOfflineDictConfigVersion',
        'latestOnlineConfigVersion'       => 'latestOnlineConfigVersion',
        'latestOnlineQueryConfigVersion'  => 'latestOnlineQueryConfigVersion',
        'name'                            => 'name',
        'queryNode'                       => 'queryNode',
        'status'                          => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
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
        if (null !== $this->currentOfflineDictConfigVersion) {
            $res['currentOfflineDictConfigVersion'] = $this->currentOfflineDictConfigVersion;
        }
        if (null !== $this->currentOnlineConfigVersion) {
            $res['currentOnlineConfigVersion'] = $this->currentOnlineConfigVersion;
        }
        if (null !== $this->currentOnlineQueryConfigVersion) {
            $res['currentOnlineQueryConfigVersion'] = $this->currentOnlineQueryConfigVersion;
        }
        if (null !== $this->dataNode) {
            $res['dataNode'] = null !== $this->dataNode ? $this->dataNode->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->latestAdvanceConfigVersion) {
            $res['latestAdvanceConfigVersion'] = $this->latestAdvanceConfigVersion;
        }
        if (null !== $this->latestOfflineDictConfigVersion) {
            $res['latestOfflineDictConfigVersion'] = $this->latestOfflineDictConfigVersion;
        }
        if (null !== $this->latestOnlineConfigVersion) {
            $res['latestOnlineConfigVersion'] = $this->latestOnlineConfigVersion;
        }
        if (null !== $this->latestOnlineQueryConfigVersion) {
            $res['latestOnlineQueryConfigVersion'] = $this->latestOnlineQueryConfigVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->queryNode) {
            $res['queryNode'] = null !== $this->queryNode ? $this->queryNode->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['config'])) {
            $model->config = $map['config'];
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
        if (isset($map['currentOfflineDictConfigVersion'])) {
            $model->currentOfflineDictConfigVersion = $map['currentOfflineDictConfigVersion'];
        }
        if (isset($map['currentOnlineConfigVersion'])) {
            $model->currentOnlineConfigVersion = $map['currentOnlineConfigVersion'];
        }
        if (isset($map['currentOnlineQueryConfigVersion'])) {
            $model->currentOnlineQueryConfigVersion = $map['currentOnlineQueryConfigVersion'];
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
        if (isset($map['latestOfflineDictConfigVersion'])) {
            $model->latestOfflineDictConfigVersion = $map['latestOfflineDictConfigVersion'];
        }
        if (isset($map['latestOnlineConfigVersion'])) {
            $model->latestOnlineConfigVersion = $map['latestOnlineConfigVersion'];
        }
        if (isset($map['latestOnlineQueryConfigVersion'])) {
            $model->latestOnlineQueryConfigVersion = $map['latestOnlineQueryConfigVersion'];
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
