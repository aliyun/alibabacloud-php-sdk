<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainSubnetListResponseBody\result;

use AlibabaCloud\Tea\Model;

class blockchainSubnetList extends Model
{
    /**
     * @var string
     */
    public $antChainId;

    /**
     * @var int
     */
    public $blockHeight;

    /**
     * @var bool
     */
    public $consortiumMember;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $monitor;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nodeSum;

    /**
     * @var string
     */
    public $rest;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $transactionSum;
    protected $_name = [
        'antChainId'       => 'AntChainId',
        'blockHeight'      => 'BlockHeight',
        'consortiumMember' => 'ConsortiumMember',
        'createTime'       => 'CreateTime',
        'groupId'          => 'GroupId',
        'monitor'          => 'Monitor',
        'name'             => 'Name',
        'nodeSum'          => 'NodeSum',
        'rest'             => 'Rest',
        'status'           => 'Status',
        'transactionSum'   => 'TransactionSum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->blockHeight) {
            $res['BlockHeight'] = $this->blockHeight;
        }
        if (null !== $this->consortiumMember) {
            $res['ConsortiumMember'] = $this->consortiumMember;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->monitor) {
            $res['Monitor'] = $this->monitor;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeSum) {
            $res['NodeSum'] = $this->nodeSum;
        }
        if (null !== $this->rest) {
            $res['Rest'] = $this->rest;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transactionSum) {
            $res['TransactionSum'] = $this->transactionSum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockchainSubnetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['BlockHeight'])) {
            $model->blockHeight = $map['BlockHeight'];
        }
        if (isset($map['ConsortiumMember'])) {
            $model->consortiumMember = $map['ConsortiumMember'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Monitor'])) {
            $model->monitor = $map['Monitor'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeSum'])) {
            $model->nodeSum = $map['NodeSum'];
        }
        if (isset($map['Rest'])) {
            $model->rest = $map['Rest'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransactionSum'])) {
            $model->transactionSum = $map['TransactionSum'];
        }

        return $model;
    }
}
