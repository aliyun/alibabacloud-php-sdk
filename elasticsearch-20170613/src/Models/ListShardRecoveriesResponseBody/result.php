<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListShardRecoveriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $sourceHost;

    /**
     * @var string
     */
    public $sourceNode;

    /**
     * @var int
     */
    public $filesTotal;

    /**
     * @var string
     */
    public $bytesPercent;

    /**
     * @var int
     */
    public $translogOps;

    /**
     * @var string
     */
    public $translogOpsPercent;

    /**
     * @var int
     */
    public $bytesTotal;

    /**
     * @var string
     */
    public $targetHost;

    /**
     * @var string
     */
    public $targetNode;

    /**
     * @var string
     */
    public $filesPercent;

    /**
     * @var string
     */
    public $stage;
    protected $_name = [
        'index'              => 'index',
        'sourceHost'         => 'sourceHost',
        'sourceNode'         => 'sourceNode',
        'filesTotal'         => 'filesTotal',
        'bytesPercent'       => 'bytesPercent',
        'translogOps'        => 'translogOps',
        'translogOpsPercent' => 'translogOpsPercent',
        'bytesTotal'         => 'bytesTotal',
        'targetHost'         => 'targetHost',
        'targetNode'         => 'targetNode',
        'filesPercent'       => 'filesPercent',
        'stage'              => 'stage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->sourceHost) {
            $res['sourceHost'] = $this->sourceHost;
        }
        if (null !== $this->sourceNode) {
            $res['sourceNode'] = $this->sourceNode;
        }
        if (null !== $this->filesTotal) {
            $res['filesTotal'] = $this->filesTotal;
        }
        if (null !== $this->bytesPercent) {
            $res['bytesPercent'] = $this->bytesPercent;
        }
        if (null !== $this->translogOps) {
            $res['translogOps'] = $this->translogOps;
        }
        if (null !== $this->translogOpsPercent) {
            $res['translogOpsPercent'] = $this->translogOpsPercent;
        }
        if (null !== $this->bytesTotal) {
            $res['bytesTotal'] = $this->bytesTotal;
        }
        if (null !== $this->targetHost) {
            $res['targetHost'] = $this->targetHost;
        }
        if (null !== $this->targetNode) {
            $res['targetNode'] = $this->targetNode;
        }
        if (null !== $this->filesPercent) {
            $res['filesPercent'] = $this->filesPercent;
        }
        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['sourceHost'])) {
            $model->sourceHost = $map['sourceHost'];
        }
        if (isset($map['sourceNode'])) {
            $model->sourceNode = $map['sourceNode'];
        }
        if (isset($map['filesTotal'])) {
            $model->filesTotal = $map['filesTotal'];
        }
        if (isset($map['bytesPercent'])) {
            $model->bytesPercent = $map['bytesPercent'];
        }
        if (isset($map['translogOps'])) {
            $model->translogOps = $map['translogOps'];
        }
        if (isset($map['translogOpsPercent'])) {
            $model->translogOpsPercent = $map['translogOpsPercent'];
        }
        if (isset($map['bytesTotal'])) {
            $model->bytesTotal = $map['bytesTotal'];
        }
        if (isset($map['targetHost'])) {
            $model->targetHost = $map['targetHost'];
        }
        if (isset($map['targetNode'])) {
            $model->targetNode = $map['targetNode'];
        }
        if (isset($map['filesPercent'])) {
            $model->filesPercent = $map['filesPercent'];
        }
        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        return $model;
    }
}
