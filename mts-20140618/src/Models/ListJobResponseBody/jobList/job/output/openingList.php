<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\openingList\opening;

class openingList extends Model
{
    /**
     * @var opening[]
     */
    public $opening;
    protected $_name = [
        'opening' => 'Opening',
    ];

    public function validate()
    {
        if (\is_array($this->opening)) {
            Model::validateArray($this->opening);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opening) {
            if (\is_array($this->opening)) {
                $res['Opening'] = [];
                $n1 = 0;
                foreach ($this->opening as $item1) {
                    $res['Opening'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Opening'])) {
            if (!empty($map['Opening'])) {
                $model->opening = [];
                $n1 = 0;
                foreach ($map['Opening'] as $item1) {
                    $model->opening[$n1] = opening::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
