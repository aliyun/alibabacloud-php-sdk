<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDataSourcesResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDataSourcesResponseBody\data\objectList\config;
use AlibabaCloud\Tea\Model;

class objectList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $agentIsOnline;

    /**
     * @var config[]
     */
    public $config;

    /**
     * @example 2024-12-17 09:29:58
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $dbNum;

    /**
     * @example unexpected exception
     *
     * @var string
     */
    public $errMsg;

    /**
     * @example 2000015
     *
     * @var int
     */
    public $id;

    /**
     * @example 2024-12-17 15:44:17
     *
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @example demo
     *
     * @var string
     */
    public $name;

    /**
     * @example vpc-2zebqp6uojhdla46677tl:cn-beijing
     *
     * @var string
     */
    public $networklink;

    /**
     * @example 10000000
     *
     * @var int
     */
    public $partitionNum;

    /**
     * @example 2332
     *
     * @var int
     */
    public $partitionsDoingNum;

    /**
     * @example 23
     *
     * @var int
     */
    public $partitionsDoneNum;

    /**
     * @example 2323
     *
     * @var int
     */
    public $partitionsFailedNum;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example 1000253
     *
     * @var int
     */
    public $scanId;

    /**
     * @example STARTED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1000
     *
     * @var int
     */
    public $tableNum;

    /**
     * @example 18
     *
     * @var int
     */
    public $tablesDoingNum;

    /**
     * @example 2323
     *
     * @var int
     */
    public $tablesDoneNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $tablesFailedNum;

    /**
     * @example 22
     *
     * @var int
     */
    public $tablesPartDoneNum;

    /**
     * @example BIGQUERY
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'agentIsOnline' => 'agentIsOnline',
        'config' => 'config',
        'createTime' => 'createTime',
        'dbNum' => 'dbNum',
        'errMsg' => 'errMsg',
        'id' => 'id',
        'lastUpdateTime' => 'lastUpdateTime',
        'name' => 'name',
        'networklink' => 'networklink',
        'partitionNum' => 'partitionNum',
        'partitionsDoingNum' => 'partitionsDoingNum',
        'partitionsDoneNum' => 'partitionsDoneNum',
        'partitionsFailedNum' => 'partitionsFailedNum',
        'region' => 'region',
        'scanId' => 'scanId',
        'status' => 'status',
        'tableNum' => 'tableNum',
        'tablesDoingNum' => 'tablesDoingNum',
        'tablesDoneNum' => 'tablesDoneNum',
        'tablesFailedNum' => 'tablesFailedNum',
        'tablesPartDoneNum' => 'tablesPartDoneNum',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentIsOnline) {
            $res['agentIsOnline'] = $this->agentIsOnline;
        }
        if (null !== $this->config) {
            $res['config'] = [];
            if (null !== $this->config && \is_array($this->config)) {
                $n = 0;
                foreach ($this->config as $item) {
                    $res['config'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dbNum) {
            $res['dbNum'] = $this->dbNum;
        }
        if (null !== $this->errMsg) {
            $res['errMsg'] = $this->errMsg;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->lastUpdateTime) {
            $res['lastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->networklink) {
            $res['networklink'] = $this->networklink;
        }
        if (null !== $this->partitionNum) {
            $res['partitionNum'] = $this->partitionNum;
        }
        if (null !== $this->partitionsDoingNum) {
            $res['partitionsDoingNum'] = $this->partitionsDoingNum;
        }
        if (null !== $this->partitionsDoneNum) {
            $res['partitionsDoneNum'] = $this->partitionsDoneNum;
        }
        if (null !== $this->partitionsFailedNum) {
            $res['partitionsFailedNum'] = $this->partitionsFailedNum;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->scanId) {
            $res['scanId'] = $this->scanId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tableNum) {
            $res['tableNum'] = $this->tableNum;
        }
        if (null !== $this->tablesDoingNum) {
            $res['tablesDoingNum'] = $this->tablesDoingNum;
        }
        if (null !== $this->tablesDoneNum) {
            $res['tablesDoneNum'] = $this->tablesDoneNum;
        }
        if (null !== $this->tablesFailedNum) {
            $res['tablesFailedNum'] = $this->tablesFailedNum;
        }
        if (null !== $this->tablesPartDoneNum) {
            $res['tablesPartDoneNum'] = $this->tablesPartDoneNum;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return objectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentIsOnline'])) {
            $model->agentIsOnline = $map['agentIsOnline'];
        }
        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                $n = 0;
                foreach ($map['config'] as $item) {
                    $model->config[$n++] = null !== $item ? config::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dbNum'])) {
            $model->dbNum = $map['dbNum'];
        }
        if (isset($map['errMsg'])) {
            $model->errMsg = $map['errMsg'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['lastUpdateTime'])) {
            $model->lastUpdateTime = $map['lastUpdateTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['networklink'])) {
            $model->networklink = $map['networklink'];
        }
        if (isset($map['partitionNum'])) {
            $model->partitionNum = $map['partitionNum'];
        }
        if (isset($map['partitionsDoingNum'])) {
            $model->partitionsDoingNum = $map['partitionsDoingNum'];
        }
        if (isset($map['partitionsDoneNum'])) {
            $model->partitionsDoneNum = $map['partitionsDoneNum'];
        }
        if (isset($map['partitionsFailedNum'])) {
            $model->partitionsFailedNum = $map['partitionsFailedNum'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['scanId'])) {
            $model->scanId = $map['scanId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tableNum'])) {
            $model->tableNum = $map['tableNum'];
        }
        if (isset($map['tablesDoingNum'])) {
            $model->tablesDoingNum = $map['tablesDoingNum'];
        }
        if (isset($map['tablesDoneNum'])) {
            $model->tablesDoneNum = $map['tablesDoneNum'];
        }
        if (isset($map['tablesFailedNum'])) {
            $model->tablesFailedNum = $map['tablesFailedNum'];
        }
        if (isset($map['tablesPartDoneNum'])) {
            $model->tablesPartDoneNum = $map['tablesPartDoneNum'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
