<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksResponseBody;

use AlibabaCloud\Tea\Model;

class checks extends Model
{
    /**
     * @example 1697100584236600453-ce0da5a1d627e4e9e9f96cae8ad07****-clustercheck-lboto
     *
     * @var string
     */
    public $checkId;

    /**
     * @example 2023-10-16T08:31:20.292030178Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 2023-10-16T08:35:20.292030178Z
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @example task succeed
     *
     * @var string
     */
    public $message;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example ClusterUpgrade
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId'    => 'check_id',
        'createdAt'  => 'created_at',
        'finishedAt' => 'finished_at',
        'message'    => 'message',
        'status'     => 'status',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['check_id'] = $this->checkId;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->finishedAt) {
            $res['finished_at'] = $this->finishedAt;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_id'])) {
            $model->checkId = $map['check_id'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['finished_at'])) {
            $model->finishedAt = $map['finished_at'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
