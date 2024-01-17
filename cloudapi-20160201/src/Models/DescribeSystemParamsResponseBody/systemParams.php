<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSystemParamsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeSystemParamsResponseBody\systemParams\systemParam;
use AlibabaCloud\Tea\Model;

class systemParams extends Model
{
    /**
     * @var systemParam[]
     */
    public $systemParam;
    protected $_name = [
        'systemParam' => 'SystemParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemParam) {
            $res['SystemParam'] = [];
            if (null !== $this->systemParam && \is_array($this->systemParam)) {
                $n = 0;
                foreach ($this->systemParam as $item) {
                    $res['SystemParam'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SystemParam'])) {
            if (!empty($map['SystemParam'])) {
                $model->systemParam = [];
                $n                  = 0;
                foreach ($map['SystemParam'] as $item) {
                    $model->systemParam[$n++] = null !== $item ? systemParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
