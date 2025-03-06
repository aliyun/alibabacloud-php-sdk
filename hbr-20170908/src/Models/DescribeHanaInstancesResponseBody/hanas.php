<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody\hanas\hana;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hana) {
            $res['Hana'] = [];
            if (null !== $this->hana && \is_array($this->hana)) {
                $n = 0;
                foreach ($this->hana as $item) {
                    $res['Hana'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hanas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hana'])) {
            if (!empty($map['Hana'])) {
                $model->hana = [];
                $n           = 0;
                foreach ($map['Hana'] as $item) {
                    $model->hana[$n++] = null !== $item ? hana::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
