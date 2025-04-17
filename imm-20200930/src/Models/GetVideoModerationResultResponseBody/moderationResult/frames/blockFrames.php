<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetVideoModerationResultResponseBody\moderationResult\frames;

use AlibabaCloud\Dara\Model;

class blockFrames extends Model
{
    /**
     * @var string
     */
    public $label;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var float
     */
    public $rate;
    protected $_name = [
        'label' => 'Label',
        'offset' => 'Offset',
        'rate' => 'Rate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
