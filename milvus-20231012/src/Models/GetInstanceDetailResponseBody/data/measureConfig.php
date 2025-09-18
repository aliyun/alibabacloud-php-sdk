<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\GetInstanceDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class measureConfig extends Model
{
    /**
     * @var int
     */
    public $dataNodeCuNum;

    /**
     * @var int
     */
    public $dataNodeReplica;

    /**
     * @var int
     */
    public $indexNodeCuNum;

    /**
     * @var int
     */
    public $indexNodeReplica;

    /**
     * @var int
     */
    public $mixCoodinatorNodeCuNum;

    /**
     * @var int
     */
    public $mixCoodinatorNodeReplica;

    /**
     * @var int
     */
    public $proxyNodeCuNum;

    /**
     * @var int
     */
    public $proxyNodeReplica;

    /**
     * @var int
     */
    public $queryNodeCuNum;

    /**
     * @var int
     */
    public $queryNodeReplica;
    protected $_name = [
        'dataNodeCuNum' => 'DataNodeCuNum',
        'dataNodeReplica' => 'DataNodeReplica',
        'indexNodeCuNum' => 'IndexNodeCuNum',
        'indexNodeReplica' => 'IndexNodeReplica',
        'mixCoodinatorNodeCuNum' => 'MixCoodinatorNodeCuNum',
        'mixCoodinatorNodeReplica' => 'MixCoodinatorNodeReplica',
        'proxyNodeCuNum' => 'ProxyNodeCuNum',
        'proxyNodeReplica' => 'ProxyNodeReplica',
        'queryNodeCuNum' => 'QueryNodeCuNum',
        'queryNodeReplica' => 'QueryNodeReplica',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataNodeCuNum) {
            $res['DataNodeCuNum'] = $this->dataNodeCuNum;
        }

        if (null !== $this->dataNodeReplica) {
            $res['DataNodeReplica'] = $this->dataNodeReplica;
        }

        if (null !== $this->indexNodeCuNum) {
            $res['IndexNodeCuNum'] = $this->indexNodeCuNum;
        }

        if (null !== $this->indexNodeReplica) {
            $res['IndexNodeReplica'] = $this->indexNodeReplica;
        }

        if (null !== $this->mixCoodinatorNodeCuNum) {
            $res['MixCoodinatorNodeCuNum'] = $this->mixCoodinatorNodeCuNum;
        }

        if (null !== $this->mixCoodinatorNodeReplica) {
            $res['MixCoodinatorNodeReplica'] = $this->mixCoodinatorNodeReplica;
        }

        if (null !== $this->proxyNodeCuNum) {
            $res['ProxyNodeCuNum'] = $this->proxyNodeCuNum;
        }

        if (null !== $this->proxyNodeReplica) {
            $res['ProxyNodeReplica'] = $this->proxyNodeReplica;
        }

        if (null !== $this->queryNodeCuNum) {
            $res['QueryNodeCuNum'] = $this->queryNodeCuNum;
        }

        if (null !== $this->queryNodeReplica) {
            $res['QueryNodeReplica'] = $this->queryNodeReplica;
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
        if (isset($map['DataNodeCuNum'])) {
            $model->dataNodeCuNum = $map['DataNodeCuNum'];
        }

        if (isset($map['DataNodeReplica'])) {
            $model->dataNodeReplica = $map['DataNodeReplica'];
        }

        if (isset($map['IndexNodeCuNum'])) {
            $model->indexNodeCuNum = $map['IndexNodeCuNum'];
        }

        if (isset($map['IndexNodeReplica'])) {
            $model->indexNodeReplica = $map['IndexNodeReplica'];
        }

        if (isset($map['MixCoodinatorNodeCuNum'])) {
            $model->mixCoodinatorNodeCuNum = $map['MixCoodinatorNodeCuNum'];
        }

        if (isset($map['MixCoodinatorNodeReplica'])) {
            $model->mixCoodinatorNodeReplica = $map['MixCoodinatorNodeReplica'];
        }

        if (isset($map['ProxyNodeCuNum'])) {
            $model->proxyNodeCuNum = $map['ProxyNodeCuNum'];
        }

        if (isset($map['ProxyNodeReplica'])) {
            $model->proxyNodeReplica = $map['ProxyNodeReplica'];
        }

        if (isset($map['QueryNodeCuNum'])) {
            $model->queryNodeCuNum = $map['QueryNodeCuNum'];
        }

        if (isset($map['QueryNodeReplica'])) {
            $model->queryNodeReplica = $map['QueryNodeReplica'];
        }

        return $model;
    }
}
