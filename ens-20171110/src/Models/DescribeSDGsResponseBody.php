<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody\SDGs;
use AlibabaCloud\Tea\Model;

class DescribeSDGsResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 3703C4AC-9396-458C-8F25-1D701334D309
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the SDGs.
     *
     * @var SDGs[]
     */
    public $SDGs;
    protected $_name = [
        'requestId' => 'RequestId',
        'SDGs'      => 'SDGs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SDGs) {
            $res['SDGs'] = [];
            if (null !== $this->SDGs && \is_array($this->SDGs)) {
                $n = 0;
                foreach ($this->SDGs as $item) {
                    $res['SDGs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSDGsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SDGs'])) {
            if (!empty($map['SDGs'])) {
                $model->SDGs = [];
                $n           = 0;
                foreach ($map['SDGs'] as $item) {
                    $model->SDGs[$n++] = null !== $item ? SDGs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
