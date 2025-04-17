<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Spec extends Model
{
    /**
     * @var CustomParams
     */
    public $backbone;

    /**
     * @var int
     */
    public $classNum;

    /**
     * @var CustomParams
     */
    public $head;

    /**
     * @var int
     */
    public $inputChannel;

    /**
     * @var CustomParams
     */
    public $loss;

    /**
     * @var string
     */
    public $name;

    /**
     * @var CustomParams
     */
    public $neck;

    /**
     * @var int
     */
    public $numLandmarks;

    /**
     * @var string
     */
    public $pretrainedPath;
    protected $_name = [
        'backbone' => 'Backbone',
        'classNum' => 'ClassNum',
        'head' => 'Head',
        'inputChannel' => 'InputChannel',
        'loss' => 'Loss',
        'name' => 'Name',
        'neck' => 'Neck',
        'numLandmarks' => 'NumLandmarks',
        'pretrainedPath' => 'PretrainedPath',
    ];

    public function validate()
    {
        if (null !== $this->backbone) {
            $this->backbone->validate();
        }
        if (null !== $this->head) {
            $this->head->validate();
        }
        if (null !== $this->loss) {
            $this->loss->validate();
        }
        if (null !== $this->neck) {
            $this->neck->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backbone) {
            $res['Backbone'] = null !== $this->backbone ? $this->backbone->toArray($noStream) : $this->backbone;
        }

        if (null !== $this->classNum) {
            $res['ClassNum'] = $this->classNum;
        }

        if (null !== $this->head) {
            $res['Head'] = null !== $this->head ? $this->head->toArray($noStream) : $this->head;
        }

        if (null !== $this->inputChannel) {
            $res['InputChannel'] = $this->inputChannel;
        }

        if (null !== $this->loss) {
            $res['Loss'] = null !== $this->loss ? $this->loss->toArray($noStream) : $this->loss;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->neck) {
            $res['Neck'] = null !== $this->neck ? $this->neck->toArray($noStream) : $this->neck;
        }

        if (null !== $this->numLandmarks) {
            $res['NumLandmarks'] = $this->numLandmarks;
        }

        if (null !== $this->pretrainedPath) {
            $res['PretrainedPath'] = $this->pretrainedPath;
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
