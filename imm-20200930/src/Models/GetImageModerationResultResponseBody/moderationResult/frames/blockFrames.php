<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult\frames;

use AlibabaCloud\Tea\Model;

class blockFrames extends Model
{
    /**
     * @description The label of the violation.
     *
     * @example {
     * }
     * @var string
     */
    public $label;

    /**
     * @description The offset of the frame.
     *
     * @example 2
     *
     * @var int
     */
    public $offset;

    /**
     * @description The confidence level of the violation.
     *
     * @example 30
     *
     * @var float
     */
    public $rate;
    protected $_name = [
        'label'  => 'Label',
        'offset' => 'Offset',
        'rate'   => 'Rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockFrames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        return $model;
    }
}
