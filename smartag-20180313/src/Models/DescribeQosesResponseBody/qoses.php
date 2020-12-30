<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesResponseBody\qoses\qos;
use AlibabaCloud\Tea\Model;

class qoses extends Model
{
    /**
     * @var qos[]
     */
    public $qos;
    protected $_name = [
        'qos' => 'Qos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qos) {
            $res['Qos'] = [];
            if (null !== $this->qos && \is_array($this->qos)) {
                $n = 0;
                foreach ($this->qos as $item) {
                    $res['Qos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qoses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Qos'])) {
            if (!empty($map['Qos'])) {
                $model->qos = [];
                $n          = 0;
                foreach ($map['Qos'] as $item) {
                    $model->qos[$n++] = null !== $item ? qos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
