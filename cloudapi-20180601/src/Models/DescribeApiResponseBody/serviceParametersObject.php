<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiResponseBody\serviceParametersObject\serviceParam;
use AlibabaCloud\Tea\Model;

class serviceParametersObject extends Model
{
    /**
     * @var serviceParam[]
     */
    public $serviceParam;
    protected $_name = [
        'serviceParam' => 'ServiceParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceParam) {
            $res['ServiceParam'] = [];
            if (null !== $this->serviceParam && \is_array($this->serviceParam)) {
                $n = 0;
                foreach ($this->serviceParam as $item) {
                    $res['ServiceParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceParametersObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceParam'])) {
            if (!empty($map['ServiceParam'])) {
                $model->serviceParam = [];
                $n                   = 0;
                foreach ($map['ServiceParam'] as $item) {
                    $model->serviceParam[$n++] = null !== $item ? serviceParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
