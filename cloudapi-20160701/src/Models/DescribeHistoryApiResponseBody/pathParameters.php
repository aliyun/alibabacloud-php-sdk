<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeHistoryApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeHistoryApiResponseBody\pathParameters\pathParameter;
use AlibabaCloud\Tea\Model;

class pathParameters extends Model
{
    /**
     * @var pathParameter[]
     */
    public $pathParameter;
    protected $_name = [
        'pathParameter' => 'PathParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pathParameter) {
            $res['PathParameter'] = [];
            if (null !== $this->pathParameter && \is_array($this->pathParameter)) {
                $n = 0;
                foreach ($this->pathParameter as $item) {
                    $res['PathParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pathParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PathParameter'])) {
            if (!empty($map['PathParameter'])) {
                $model->pathParameter = [];
                $n                    = 0;
                foreach ($map['PathParameter'] as $item) {
                    $model->pathParameter[$n++] = null !== $item ? pathParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
