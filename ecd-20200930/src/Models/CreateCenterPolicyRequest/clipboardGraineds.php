<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\CreateCenterPolicyRequest;

use AlibabaCloud\Dara\Model;

class clipboardGraineds extends Model
{
    /**
     * @var int
     */
    public $clipboardSize;

    /**
     * @var string
     */
    public $clipboardSizeUnit;

    /**
     * @var string
     */
    public $clipboardType;

    /**
     * @var string
     */
    public $grainedType;

    /**
     * @var int
     */
    public $inClipboardSize;

    /**
     * @var string
     */
    public $inClipboardSizeUnit;

    /**
     * @var int
     */
    public $outClipboardSize;

    /**
     * @var string
     */
    public $outClipboardSizeUnit;
    protected $_name = [
        'clipboardSize' => 'ClipboardSize',
        'clipboardSizeUnit' => 'ClipboardSizeUnit',
        'clipboardType' => 'ClipboardType',
        'grainedType' => 'GrainedType',
        'inClipboardSize' => 'InClipboardSize',
        'inClipboardSizeUnit' => 'InClipboardSizeUnit',
        'outClipboardSize' => 'OutClipboardSize',
        'outClipboardSizeUnit' => 'OutClipboardSizeUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clipboardSize) {
            $res['ClipboardSize'] = $this->clipboardSize;
        }

        if (null !== $this->clipboardSizeUnit) {
            $res['ClipboardSizeUnit'] = $this->clipboardSizeUnit;
        }

        if (null !== $this->clipboardType) {
            $res['ClipboardType'] = $this->clipboardType;
        }

        if (null !== $this->grainedType) {
            $res['GrainedType'] = $this->grainedType;
        }

        if (null !== $this->inClipboardSize) {
            $res['InClipboardSize'] = $this->inClipboardSize;
        }

        if (null !== $this->inClipboardSizeUnit) {
            $res['InClipboardSizeUnit'] = $this->inClipboardSizeUnit;
        }

        if (null !== $this->outClipboardSize) {
            $res['OutClipboardSize'] = $this->outClipboardSize;
        }

        if (null !== $this->outClipboardSizeUnit) {
            $res['OutClipboardSizeUnit'] = $this->outClipboardSizeUnit;
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
        if (isset($map['ClipboardSize'])) {
            $model->clipboardSize = $map['ClipboardSize'];
        }

        if (isset($map['ClipboardSizeUnit'])) {
            $model->clipboardSizeUnit = $map['ClipboardSizeUnit'];
        }

        if (isset($map['ClipboardType'])) {
            $model->clipboardType = $map['ClipboardType'];
        }

        if (isset($map['GrainedType'])) {
            $model->grainedType = $map['GrainedType'];
        }

        if (isset($map['InClipboardSize'])) {
            $model->inClipboardSize = $map['InClipboardSize'];
        }

        if (isset($map['InClipboardSizeUnit'])) {
            $model->inClipboardSizeUnit = $map['InClipboardSizeUnit'];
        }

        if (isset($map['OutClipboardSize'])) {
            $model->outClipboardSize = $map['OutClipboardSize'];
        }

        if (isset($map['OutClipboardSizeUnit'])) {
            $model->outClipboardSizeUnit = $map['OutClipboardSizeUnit'];
        }

        return $model;
    }
}
