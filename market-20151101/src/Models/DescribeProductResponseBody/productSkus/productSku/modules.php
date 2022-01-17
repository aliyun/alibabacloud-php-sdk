<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\modules\module;
use AlibabaCloud\Tea\Model;

class modules extends Model
{
    /**
     * @var module[]
     */
    public $module;
    protected $_name = [
        'module' => 'Module',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = [];
            if (null !== $this->module && \is_array($this->module)) {
                $n = 0;
                foreach ($this->module as $item) {
                    $res['Module'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            if (!empty($map['Module'])) {
                $model->module = [];
                $n             = 0;
                foreach ($map['Module'] as $item) {
                    $model->module[$n++] = null !== $item ? module::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
