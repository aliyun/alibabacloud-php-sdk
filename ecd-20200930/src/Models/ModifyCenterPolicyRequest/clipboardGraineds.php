<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyCenterPolicyRequest;

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
    public $clipboardType;

    /**
     * @var string
     */
    public $grainedType;
    protected $_name = [
        'clipboardSize' => 'ClipboardSize',
        'clipboardType' => 'ClipboardType',
        'grainedType' => 'GrainedType',
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

        if (null !== $this->clipboardType) {
            $res['ClipboardType'] = $this->clipboardType;
        }

        if (null !== $this->grainedType) {
            $res['GrainedType'] = $this->grainedType;
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

        if (isset($map['ClipboardType'])) {
            $model->clipboardType = $map['ClipboardType'];
        }

        if (isset($map['GrainedType'])) {
            $model->grainedType = $map['GrainedType'];
        }

        return $model;
    }
}
