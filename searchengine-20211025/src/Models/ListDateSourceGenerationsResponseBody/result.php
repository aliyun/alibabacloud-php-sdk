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
     * @description The time to start index building.
     *
     * @example 1626143673
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The directory where the index file created by using the dump table is saved.
     *
     * @example ""
     *
     * @var string
     */
    public $dataDumpRoot;

    /**
     * @description The primary key of the generation.
     *
     * @example 1626143930
     *
     * @var int
     */
    public $generation;

    /**
     * @description Key indicates the name of the index. value indicates the number of shards.
     *
     * @var int[]
     */
    public $partition;

    /**
     * @description The status.
     *
     * @example STOPPED
     *
     * @var string
     */
    public $status;

    /**
     * @description The timestamp when the offline indexing was initiated.
     *
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
