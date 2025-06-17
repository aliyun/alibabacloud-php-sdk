<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMax95BpsDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMax95BpsDataResponseBody\detailData\max95Detail;

class detailData extends Model
{
    /**
     * @var max95Detail[]
     */
    public $max95Detail;
    protected $_name = [
        'max95Detail' => 'Max95Detail',
    ];

    public function validate()
    {
        if (\is_array($this->max95Detail)) {
            Model::validateArray($this->max95Detail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->max95Detail) {
            if (\is_array($this->max95Detail)) {
                $res['Max95Detail'] = [];
                $n1 = 0;
                foreach ($this->max95Detail as $item1) {
                    $res['Max95Detail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Max95Detail'])) {
            if (!empty($map['Max95Detail'])) {
                $model->max95Detail = [];
                $n1 = 0;
                foreach ($map['Max95Detail'] as $item1) {
                    $model->max95Detail[$n1] = max95Detail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
