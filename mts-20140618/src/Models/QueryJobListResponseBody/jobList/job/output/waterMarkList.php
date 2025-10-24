<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\waterMarkList\waterMark;

class waterMarkList extends Model
{
    /**
     * @var waterMark[]
     */
    public $waterMark;
    protected $_name = [
        'waterMark' => 'WaterMark',
    ];

    public function validate()
    {
        if (\is_array($this->waterMark)) {
            Model::validateArray($this->waterMark);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->waterMark) {
            if (\is_array($this->waterMark)) {
                $res['WaterMark'] = [];
                $n1 = 0;
                foreach ($this->waterMark as $item1) {
                    $res['WaterMark'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['WaterMark'])) {
            if (!empty($map['WaterMark'])) {
                $model->waterMark = [];
                $n1 = 0;
                foreach ($map['WaterMark'] as $item1) {
                    $model->waterMark[$n1] = waterMark::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
