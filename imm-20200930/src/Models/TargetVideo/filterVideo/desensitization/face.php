<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\TargetVideo\filterVideo\desensitization;

use AlibabaCloud\Dara\Model;

class face extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var int
     */
    public $minSize;
    protected $_name = [
        'confidence' => 'Confidence',
        'minSize' => 'MinSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->minSize) {
            $res['MinSize'] = $this->minSize;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['MinSize'])) {
            $model->minSize = $map['MinSize'];
        }

        return $model;
    }
}
