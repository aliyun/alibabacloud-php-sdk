<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Spec extends Model
{
    /**
     * @var CustomParams
     */
    public $backbone;

    /**
     * @example 10
     *
     * @var int
     */
    public $classNum;

    /**
     * @var CustomParams
     */
    public $head;

    /**
     * @example 3
     *
     * @var int
     */
    public $inputChannel;

    /**
     * @var CustomParams
     */
    public $loss;

    /**
     * @example ClsResNet
     *
     * @var string
     */
    public $name;

    /**
     * @var CustomParams
     */
    public $neck;

    /**
     * @example 5
     *
     * @var int
     */
    public $numLandmarks;

    /**
     * @example oss://bucket/abc/xxx.json
     *
     * @var string
     */
    public $pretrainedPath;
    protected $_name = [
        'backbone'       => 'Backbone',
        'classNum'       => 'ClassNum',
        'head'           => 'Head',
        'inputChannel'   => 'InputChannel',
        'loss'           => 'Loss',
        'name'           => 'Name',
        'neck'           => 'Neck',
        'numLandmarks'   => 'NumLandmarks',
        'pretrainedPath' => 'PretrainedPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backbone) {
            $res['Backbone'] = null !== $this->backbone ? $this->backbone->toMap() : null;
        }
        if (null !== $this->classNum) {
            $res['ClassNum'] = $this->classNum;
        }
        if (null !== $this->head) {
            $res['Head'] = null !== $this->head ? $this->head->toMap() : null;
        }
        if (null !== $this->inputChannel) {
            $res['InputChannel'] = $this->inputChannel;
        }
        if (null !== $this->loss) {
            $res['Loss'] = null !== $this->loss ? $this->loss->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->neck) {
            $res['Neck'] = null !== $this->neck ? $this->neck->toMap() : null;
        }
        if (null !== $this->numLandmarks) {
            $res['NumLandmarks'] = $this->numLandmarks;
        }
        if (null !== $this->pretrainedPath) {
            $res['PretrainedPath'] = $this->pretrainedPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Spec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backbone'])) {
            $model->backbone = CustomParams::fromMap($map['Backbone']);
        }
        if (isset($map['ClassNum'])) {
            $model->classNum = $map['ClassNum'];
        }
        if (isset($map['Head'])) {
            $model->head = CustomParams::fromMap($map['Head']);
        }
        if (isset($map['InputChannel'])) {
            $model->inputChannel = $map['InputChannel'];
        }
        if (isset($map['Loss'])) {
            $model->loss = CustomParams::fromMap($map['Loss']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Neck'])) {
            $model->neck = CustomParams::fromMap($map['Neck']);
        }
        if (isset($map['NumLandmarks'])) {
            $model->numLandmarks = $map['NumLandmarks'];
        }
        if (isset($map['PretrainedPath'])) {
            $model->pretrainedPath = $map['PretrainedPath'];
        }

        return $model;
    }
}
