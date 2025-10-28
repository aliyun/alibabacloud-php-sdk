<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\aigcData;

use AlibabaCloud\Dara\Model;

class AIGC extends Model
{
    /**
     * @var string
     */
    public $contentProducer;

    /**
     * @var string
     */
    public $contentPropagator;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $produceID;

    /**
     * @var string
     */
    public $propagateID;

    /**
     * @var string
     */
    public $reservedCode1;

    /**
     * @var string
     */
    public $reservedCode2;
    protected $_name = [
        'contentProducer' => 'ContentProducer',
        'contentPropagator' => 'ContentPropagator',
        'label' => 'Label',
        'produceID' => 'ProduceID',
        'propagateID' => 'PropagateID',
        'reservedCode1' => 'ReservedCode1',
        'reservedCode2' => 'ReservedCode2',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentProducer) {
            $res['ContentProducer'] = $this->contentProducer;
        }

        if (null !== $this->contentPropagator) {
            $res['ContentPropagator'] = $this->contentPropagator;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->produceID) {
            $res['ProduceID'] = $this->produceID;
        }

        if (null !== $this->propagateID) {
            $res['PropagateID'] = $this->propagateID;
        }

        if (null !== $this->reservedCode1) {
            $res['ReservedCode1'] = $this->reservedCode1;
        }

        if (null !== $this->reservedCode2) {
            $res['ReservedCode2'] = $this->reservedCode2;
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
        if (isset($map['ContentProducer'])) {
            $model->contentProducer = $map['ContentProducer'];
        }

        if (isset($map['ContentPropagator'])) {
            $model->contentPropagator = $map['ContentPropagator'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['ProduceID'])) {
            $model->produceID = $map['ProduceID'];
        }

        if (isset($map['PropagateID'])) {
            $model->propagateID = $map['PropagateID'];
        }

        if (isset($map['ReservedCode1'])) {
            $model->reservedCode1 = $map['ReservedCode1'];
        }

        if (isset($map['ReservedCode2'])) {
            $model->reservedCode2 = $map['ReservedCode2'];
        }

        return $model;
    }
}
