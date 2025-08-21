<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class RestartLogstashRequest extends Model
{
    /**
     * @var float
     */
    public $batchCount;

    /**
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
     * @var string
     */
    public $restartType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'batchCount' => 'batchCount',
        'blueGreenDep' => 'blueGreenDep',
        'nodeTypes' => 'nodeTypes',
        'nodes' => 'nodes',
        'restartType' => 'restartType',
        'clientToken' => 'clientToken',
        'force' => 'force',
    ];

    public function validate()
    {
        if (\is_array($this->nodeTypes)) {
            Model::validateArray($this->nodeTypes);
        }
        if (\is_array($this->nodes)) {
            Model::validateArray($this->nodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchCount) {
            $res['batchCount'] = $this->batchCount;
        }

        if (null !== $this->blueGreenDep) {
            $res['blueGreenDep'] = $this->blueGreenDep;
        }

        if (null !== $this->nodeTypes) {
            if (\is_array($this->nodeTypes)) {
                $res['nodeTypes'] = [];
                $n1 = 0;
                foreach ($this->nodeTypes as $item1) {
                    $res['nodeTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodes) {
            if (\is_array($this->nodes)) {
                $res['nodes'] = [];
                $n1 = 0;
                foreach ($this->nodes as $item1) {
                    $res['nodes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->nodeTypes = [];
                $n1 = 0;
                foreach ($map['nodeTypes'] as $item1) {
                    $model->nodeTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n1 = 0;
                foreach ($map['nodes'] as $item1) {
                    $model->nodes[$n1] = $item1;
                    ++$n1;
                }
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
