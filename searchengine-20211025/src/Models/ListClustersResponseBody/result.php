<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponseBody\result\dataNode;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClustersResponseBody\result\queryNode;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example " "
     *
     * @var string
     */
    public $configUpdateTime;

    /**
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
     * @var dataNode
     */
    public $dataNode;

    /**
     * @example fzz_test
     *
     * @var string
     */
    public $description;

    /**
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
     * @example ha-cn-7pp2pcna701_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @var queryNode
     */
    public $queryNode;

    /**
     * @example "starting"
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configUpdateTime'                => 'configUpdateTime',
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
        if (null !== $this->configUpdateTime) {
            $res['configUpdateTime'] = $this->configUpdateTime;
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
        if (isset($map['configUpdateTime'])) {
            $model->configUpdateTime = $map['configUpdateTime'];
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
