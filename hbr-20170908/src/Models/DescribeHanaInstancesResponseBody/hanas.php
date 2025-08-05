<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody\hanas\hana;

class hanas extends Model
{
    /**
     * @var hana[]
     */
    public $hana;
    protected $_name = [
        'hana' => 'Hana',
    ];

    public function validate()
    {
        if (\is_array($this->hana)) {
            Model::validateArray($this->hana);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hana) {
            if (\is_array($this->hana)) {
                $res['Hana'] = [];
                $n1 = 0;
                foreach ($this->hana as $item1) {
                    $res['Hana'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Hana'])) {
            if (!empty($map['Hana'])) {
                $model->hana = [];
                $n1 = 0;
                foreach ($map['Hana'] as $item1) {
                    $model->hana[$n1] = hana::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
