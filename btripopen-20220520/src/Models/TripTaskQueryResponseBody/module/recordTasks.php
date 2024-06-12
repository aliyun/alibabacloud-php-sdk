<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponseBody\module;

use AlibabaCloud\Tea\Model;

class recordTasks extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $actioner;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @example 1525104000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1525104000
     *
     * @var int
     */
    public $gmtFinished;

    /**
     * @example 34360
     *
     * @var int
     */
    public $id;

    /**
     * @example 575003
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example agree
     *
     * @var string
     */
    public $outResult;

    /**
     * @example 123
     *
     * @var string
     */
    public $owner;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'actioner'    => 'actioner',
        'attributes'  => 'attributes',
        'gmtCreate'   => 'gmt_create',
        'gmtFinished' => 'gmt_finished',
        'id'          => 'id',
        'nodeId'      => 'node_id',
        'outResult'   => 'out_result',
        'owner'       => 'owner',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actioner) {
            $res['actioner'] = $this->actioner;
        }
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtFinished) {
            $res['gmt_finished'] = $this->gmtFinished;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->nodeId) {
            $res['node_id'] = $this->nodeId;
        }
        if (null !== $this->outResult) {
            $res['out_result'] = $this->outResult;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actioner'])) {
            $model->actioner = $map['actioner'];
        }
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }
        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }
        if (isset($map['gmt_finished'])) {
            $model->gmtFinished = $map['gmt_finished'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['node_id'])) {
            $model->nodeId = $map['node_id'];
        }
        if (isset($map['out_result'])) {
            $model->outResult = $map['out_result'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
