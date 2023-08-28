<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListDateSourceGenerationsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description buildDeployId
     *
     * @example 122
     *
     * @var int
     */
    public $buildDeployId;

    /**
     * @example 1626143673
     *
     * @var int
     */
    public $createTime;

    /**
     * @example ""
     *
     * @var string
     */
    public $dataDumpRoot;

    /**
     * @example 1626143930
     *
     * @var int
     */
    public $generation;

    /**
     * @var int[]
     */
    public $partition;

    /**
     * @example STOPPED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1626143673
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'buildDeployId' => 'buildDeployId',
        'createTime'    => 'createTime',
        'dataDumpRoot'  => 'dataDumpRoot',
        'generation'    => 'generation',
        'partition'     => 'partition',
        'status'        => 'status',
        'timestamp'     => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildDeployId) {
            $res['buildDeployId'] = $this->buildDeployId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dataDumpRoot) {
            $res['dataDumpRoot'] = $this->dataDumpRoot;
        }
        if (null !== $this->generation) {
            $res['generation'] = $this->generation;
        }
        if (null !== $this->partition) {
            $res['partition'] = $this->partition;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['buildDeployId'])) {
            $model->buildDeployId = $map['buildDeployId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dataDumpRoot'])) {
            $model->dataDumpRoot = $map['dataDumpRoot'];
        }
        if (isset($map['generation'])) {
            $model->generation = $map['generation'];
        }
        if (isset($map['partition'])) {
            $model->partition = $map['partition'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
