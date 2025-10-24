<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\tailSlateList\tailSlate;

class tailSlateList extends Model
{
    /**
     * @var tailSlate[]
     */
    public $tailSlate;
    protected $_name = [
        'tailSlate' => 'TailSlate',
    ];

    public function validate()
    {
        if (\is_array($this->tailSlate)) {
            Model::validateArray($this->tailSlate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tailSlate) {
            if (\is_array($this->tailSlate)) {
                $res['TailSlate'] = [];
                $n1 = 0;
                foreach ($this->tailSlate as $item1) {
                    $res['TailSlate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TailSlate'])) {
            if (!empty($map['TailSlate'])) {
                $model->tailSlate = [];
                $n1 = 0;
                foreach ($map['TailSlate'] as $item1) {
                    $model->tailSlate[$n1] = tailSlate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
