<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\InvestigationInfo\videoDetail;

use AlibabaCloud\Tea\Model;

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
        'label'  => 'label',
        'offset' => 'offset',
        'rate'   => 'rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->rate) {
            $res['rate'] = $this->rate;
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
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['rate'])) {
            $model->rate = $map['rate'];
        }

        return $model;
    }
}
