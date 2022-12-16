<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class RestartLogstashRequest extends Model
{
    /**
     * @example 20%
     *
     * @var float
     */
    public $batchCount;

    /**
     * @example false
     *
     * @var bool
     */
    public $blueGreenDep;

    /**
     * @var string[]
     */
    public $nodeTypes;

    /**
     * @var string[]
     */
    public $nodes;

    /**
     * @example instance
     *
     * @var string
     */
    public $restartType;

    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $force;
    protected $_name = [
        'batchCount'   => 'batchCount',
        'blueGreenDep' => 'blueGreenDep',
        'nodeTypes'    => 'nodeTypes',
        'nodes'        => 'nodes',
        'restartType'  => 'restartType',
        'clientToken'  => 'clientToken',
        'force'        => 'force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchCount) {
            $res['batchCount'] = $this->batchCount;
        }
        if (null !== $this->blueGreenDep) {
            $res['blueGreenDep'] = $this->blueGreenDep;
        }
        if (null !== $this->nodeTypes) {
            $res['nodeTypes'] = $this->nodeTypes;
        }
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
        }
        if (null !== $this->restartType) {
            $res['restartType'] = $this->restartType;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartLogstashRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchCount'])) {
            $model->batchCount = $map['batchCount'];
        }
        if (isset($map['blueGreenDep'])) {
            $model->blueGreenDep = $map['blueGreenDep'];
        }
        if (isset($map['nodeTypes'])) {
            if (!empty($map['nodeTypes'])) {
                $model->nodeTypes = $map['nodeTypes'];
            }
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }
        if (isset($map['restartType'])) {
            $model->restartType = $map['restartType'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        return $model;
    }
}
