<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryJobListResponseBody\jobList\job\output\outSubtitleList\outSubtitle;

class outSubtitleList extends Model
{
    /**
     * @var outSubtitle[]
     */
    public $outSubtitle;
    protected $_name = [
        'outSubtitle' => 'OutSubtitle',
    ];

    public function validate()
    {
        if (\is_array($this->outSubtitle)) {
            Model::validateArray($this->outSubtitle);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outSubtitle) {
            if (\is_array($this->outSubtitle)) {
                $res['OutSubtitle'] = [];
                $n1 = 0;
                foreach ($this->outSubtitle as $item1) {
                    $res['OutSubtitle'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OutSubtitle'])) {
            if (!empty($map['OutSubtitle'])) {
                $model->outSubtitle = [];
                $n1 = 0;
                foreach ($map['OutSubtitle'] as $item1) {
                    $model->outSubtitle[$n1++] = outSubtitle::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
