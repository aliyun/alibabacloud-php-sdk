<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\mergeList\merge;

class mergeList extends Model
{
    /**
     * @var merge[]
     */
    public $merge;
    protected $_name = [
        'merge' => 'Merge',
    ];

    public function validate()
    {
        if (\is_array($this->merge)) {
            Model::validateArray($this->merge);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->merge) {
            if (\is_array($this->merge)) {
                $res['Merge'] = [];
                $n1 = 0;
                foreach ($this->merge as $item1) {
                    $res['Merge'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Merge'])) {
            if (!empty($map['Merge'])) {
                $model->merge = [];
                $n1 = 0;
                foreach ($map['Merge'] as $item1) {
                    $model->merge[$n1] = merge::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
