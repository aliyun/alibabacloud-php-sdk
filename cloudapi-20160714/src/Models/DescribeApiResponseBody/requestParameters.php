<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\requestParameters\requestParameter;
use AlibabaCloud\Tea\Model;

class requestParameters extends Model
{
    /**
     * @var requestParameter[]
     */
    public $requestParameter;
    protected $_name = [
        'requestParameter' => 'RequestParameter',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParameter) {
            $res['RequestParameter'] = [];
            if (null !== $this->requestParameter && \is_array($this->requestParameter)) {
                $n = 0;
                foreach ($this->requestParameter as $item) {
                    $res['RequestParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParameter'])) {
            if (!empty($map['RequestParameter'])) {
                $model->requestParameter = [];
                $n = 0;
                foreach ($map['RequestParameter'] as $item) {
                    $model->requestParameter[$n++] = null !== $item ? requestParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
