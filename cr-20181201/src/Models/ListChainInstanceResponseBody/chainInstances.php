<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceResponseBody;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListChainInstanceResponseBody\chainInstances\chain;
use AlibabaCloud\Tea\Model;

class chainInstances extends Model
{
    /**
     * @var chain
     */
    public $chain;

    /**
     * @var string
     */
    public $chainInstanceId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'chain'             => 'Chain',
        'chainInstanceId'   => 'ChainInstanceId',
        'endTime'           => 'EndTime',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'result'            => 'Result',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chain) {
            $res['Chain'] = null !== $this->chain ? $this->chain->toMap() : null;
        }
        if (null !== $this->chainInstanceId) {
            $res['ChainInstanceId'] = $this->chainInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return chainInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Chain'])) {
            $model->chain = chain::fromMap($map['Chain']);
        }
        if (isset($map['ChainInstanceId'])) {
            $model->chainInstanceId = $map['ChainInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
