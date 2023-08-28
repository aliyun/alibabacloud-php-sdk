<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponseBody;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponseBody\result\dataNode;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\GetClusterResponseBody\result\queryNode;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the cluster was updated.
     *
     * @example 2021-08-09 00:01:02
     *
     * @var string
     */
    public $configUpdateTime;

    /**
     * @description The effective advanced configuration version.
     *
     * @example test_yyds_data1
     *
     * @var string
     */
    public $currentAdvanceConfigVersion;

    /**
     * @description The effective online configuration version.
     *
     * @example test_yyds_data1
     *
     * @var string
     */
    public $currentOnlineConfigVersion;

    /**
     * @description The specifications of the data node.
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
     * @example test_yyds_data1
     *
     * @var string
     */
    public $latestAdvanceConfigVersion;

    /**
     * @description The latest online configuration version.
     *
     * @example test_yyds_data1
     *
     * @var string
     */
    public $latestOnlineConfigVersion;

    /**
     * @description The name of the cluster.
     *
     * @example general
     *
     * @var string
     */
    public $name;

    /**
     * @description The specifications of the query node.
     *
     * @var queryNode
     */
    public $queryNode;

    /**
     * @description The creation status of the cluster. Valid values: NEW and PUBLISH. NEW indicates that the cluster is being created. PUBLISH indicates that the cluster is created.
     *
     * @example NEW
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configUpdateTime'            => 'configUpdateTime',
        'currentAdvanceConfigVersion' => 'currentAdvanceConfigVersion',
        'currentOnlineConfigVersion'  => 'currentOnlineConfigVersion',
        'dataNode'                    => 'dataNode',
        'description'                 => 'description',
        'latestAdvanceConfigVersion'  => 'latestAdvanceConfigVersion',
        'latestOnlineConfigVersion'   => 'latestOnlineConfigVersion',
        'name'                        => 'name',
        'queryNode'                   => 'queryNode',
        'status'                      => 'status',
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
        if (null !== $this->currentOnlineConfigVersion) {
            $res['currentOnlineConfigVersion'] = $this->currentOnlineConfigVersion;
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
        if (null !== $this->latestOnlineConfigVersion) {
            $res['latestOnlineConfigVersion'] = $this->latestOnlineConfigVersion;
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
