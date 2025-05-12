<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;

class superReso extends Model
{
    /**
     * @var string
     */
    public $isHalfSample;
    protected $_name = [
        'isHalfSample' => 'IsHalfSample',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isHalfSample) {
            $res['IsHalfSample'] = $this->isHalfSample;
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
        if (isset($map['IsHalfSample'])) {
            $model->isHalfSample = $map['IsHalfSample'];
        }

        return $model;
    }
}
