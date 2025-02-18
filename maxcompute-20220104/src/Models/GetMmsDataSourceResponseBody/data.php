<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsDataSourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetMmsDataSourceResponseBody\data\config;

class data extends Model
{
    /**
     * @var bool
     */
    public $agentIsOnline;
    /**
     * @var config[]
     */
    public $config;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var int
     */
    public $dbNum;
    /**
     * @var string
     */
    public $errMsg;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $lastUpdateTime;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $networklink;
    /**
     * @var int
     */
    public $partitionNum;
    /**
     * @var int
     */
    public $partitionsDoingNum;
    /**
     * @var int
     */
    public $partitionsDoneNum;
    /**
     * @var int
     */
    public $partitionsFailedNum;
    /**
     * @var string
     */
    public $region;
    /**
     * @var int
     */
    public $scanId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $tableNum;
    /**
     * @var int
     */
    public $tablesDoingNum;
    /**
     * @var int
     */
    public $tablesDoneNum;
    /**
     * @var int
     */
    public $tablesFailedNum;
    /**
     * @var int
     */
    public $tablesPartDoneNum;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'agentIsOnline'       => 'agentIsOnline',
        'config'              => 'config',
        'createTime'          => 'createTime',
        'dbNum'               => 'dbNum',
        'errMsg'              => 'errMsg',
        'id'                  => 'id',
        'lastUpdateTime'      => 'lastUpdateTime',
        'name'                => 'name',
        'networklink'         => 'networklink',
        'partitionNum'        => 'partitionNum',
        'partitionsDoingNum'  => 'partitionsDoingNum',
        'partitionsDoneNum'   => 'partitionsDoneNum',
        'partitionsFailedNum' => 'partitionsFailedNum',
        'region'              => 'region',
        'scanId'              => 'scanId',
        'status'              => 'status',
        'tableNum'            => 'tableNum',
        'tablesDoingNum'      => 'tablesDoingNum',
        'tablesDoneNum'       => 'tablesDoneNum',
        'tablesFailedNum'     => 'tablesFailedNum',
        'tablesPartDoneNum'   => 'tablesPartDoneNum',
        'type'                => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIsOnline) {
            $res['agentIsOnline'] = $this->agentIsOnline;
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                $n1            = 0;
                foreach ($this->config as $item1) {
                    $res['config'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentIsOnline'])) {
            $model->agentIsOnline = $map['agentIsOnline'];
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                $n1            = 0;
                foreach ($map['config'] as $item1) {
                    $model->config[$n1++] = config::fromMap($item1);
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
