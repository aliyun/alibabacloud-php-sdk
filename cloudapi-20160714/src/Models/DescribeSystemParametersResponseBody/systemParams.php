<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponseBody\systemParams\systemParamItem;
use AlibabaCloud\Tea\Model;

class systemParams extends Model
{
    /**
     * @var systemParamItem[]
     */
    public $systemParamItem;
    protected $_name = [
        'systemParamItem' => 'SystemParamItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemParamItem) {
            $res['SystemParamItem'] = [];
            if (null !== $this->systemParamItem && \is_array($this->systemParamItem)) {
                $n = 0;
                foreach ($this->systemParamItem as $item) {
                    $res['SystemParamItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemParamItem'])) {
            if (!empty($map['SystemParamItem'])) {
                $model->systemParamItem = [];
                $n                      = 0;
                foreach ($map['SystemParamItem'] as $item) {
                    $model->systemParamItem[$n++] = null !== $item ? systemParamItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
