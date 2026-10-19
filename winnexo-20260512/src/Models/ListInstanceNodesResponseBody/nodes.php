<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListInstanceNodesResponseBody;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $conclusion;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $enteredAt;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $handler;

    /**
     * @var int
     */
    public $lane;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $nodeOrder;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $rank;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $waitType;
    protected $_name = [
        'conclusion' => 'conclusion',
        'duration' => 'duration',
        'enteredAt' => 'enteredAt',
        'finishedAt' => 'finishedAt',
        'handler' => 'handler',
        'lane' => 'lane',
        'nodeId' => 'nodeId',
        'nodeName' => 'nodeName',
        'nodeOrder' => 'nodeOrder',
        'nodeType' => 'nodeType',
        'rank' => 'rank',
        'status' => 'status',
        'waitType' => 'waitType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conclusion) {
            $res['conclusion'] = $this->conclusion;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->enteredAt) {
            $res['enteredAt'] = $this->enteredAt;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }

        if (null !== $this->lane) {
            $res['lane'] = $this->lane;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['nodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeOrder) {
            $res['nodeOrder'] = $this->nodeOrder;
        }

        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        if (null !== $this->rank) {
            $res['rank'] = $this->rank;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->waitType) {
            $res['waitType'] = $this->waitType;
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
        if (isset($map['conclusion'])) {
            $model->conclusion = $map['conclusion'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['enteredAt'])) {
            $model->enteredAt = $map['enteredAt'];
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['handler'])) {
            $model->handler = $map['handler'];
        }

        if (isset($map['lane'])) {
            $model->lane = $map['lane'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }

        if (isset($map['nodeOrder'])) {
            $model->nodeOrder = $map['nodeOrder'];
        }

        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        if (isset($map['rank'])) {
            $model->rank = $map['rank'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['waitType'])) {
            $model->waitType = $map['waitType'];
        }

        return $model;
    }
}
