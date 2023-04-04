<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetVideoModerationResultResponseBody\moderationResult\frames;

use AlibabaCloud\Tea\Model;

class blockFrames extends Model
{
    /**
     * @example {"teat":"val"}
     *
     * @var string
     */
    public $label;

    /**
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @example 10
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
