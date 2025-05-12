<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\amixList\amix;

class amixList extends Model
{
    /**
     * @var amix[]
     */
    public $amix;
    protected $_name = [
        'amix' => 'Amix',
    ];

    public function validate()
    {
        if (\is_array($this->amix)) {
            Model::validateArray($this->amix);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amix) {
            if (\is_array($this->amix)) {
                $res['Amix'] = [];
                $n1 = 0;
                foreach ($this->amix as $item1) {
                    $res['Amix'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Amix'])) {
            if (!empty($map['Amix'])) {
                $model->amix = [];
                $n1 = 0;
                foreach ($map['Amix'] as $item1) {
                    $model->amix[$n1++] = amix::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
