<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryLicenseDeviceListResponseBody\data\deviceList\item;

class deviceList extends Model
{
    /**
     * @var item[]
     */
    public $item;
    protected $_name = [
        'item' => 'item',
    ];

    public function validate()
    {
        if (\is_array($this->item)) {
            Model::validateArray($this->item);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            if (\is_array($this->item)) {
                $res['item'] = [];
                $n1 = 0;
                foreach ($this->item as $item1) {
                    $res['item'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['item'])) {
            if (!empty($map['item'])) {
                $model->item = [];
                $n1 = 0;
                foreach ($map['item'] as $item1) {
                    $model->item[$n1] = item::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
