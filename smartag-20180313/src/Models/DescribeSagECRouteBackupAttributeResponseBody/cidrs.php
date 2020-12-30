<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagECRouteBackupAttributeResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagECRouteBackupAttributeResponseBody\cidrs\cidr;
use AlibabaCloud\Tea\Model;

class cidrs extends Model
{
    /**
     * @var cidr[]
     */
    public $cidr;
    protected $_name = [
        'cidr' => 'Cidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = [];
            if (null !== $this->cidr && \is_array($this->cidr)) {
                $n = 0;
                foreach ($this->cidr as $item) {
                    $res['Cidr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cidrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            if (!empty($map['Cidr'])) {
                $model->cidr = [];
                $n           = 0;
                foreach ($map['Cidr'] as $item) {
                    $model->cidr[$n++] = null !== $item ? cidr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
