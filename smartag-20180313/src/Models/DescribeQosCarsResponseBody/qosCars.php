<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosCarsResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosCarsResponseBody\qosCars\qosCar;
use AlibabaCloud\Tea\Model;

class qosCars extends Model
{
    /**
     * @var qosCar[]
     */
    public $qosCar;
    protected $_name = [
        'qosCar' => 'QosCar',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosCar) {
            $res['QosCar'] = [];
            if (null !== $this->qosCar && \is_array($this->qosCar)) {
                $n = 0;
                foreach ($this->qosCar as $item) {
                    $res['QosCar'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosCars
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosCar'])) {
            if (!empty($map['QosCar'])) {
                $model->qosCar = [];
                $n             = 0;
                foreach ($map['QosCar'] as $item) {
                    $model->qosCar[$n++] = null !== $item ? qosCar::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
