<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiDocResponseBody\requestBody\requestParam;
use AlibabaCloud\Tea\Model;

class requestBody extends Model
{
    /**
     * @var requestParam[]
     */
    public $requestParam;
    protected $_name = [
        'requestParam' => 'RequestParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParam) {
            $res['RequestParam'] = [];
            if (null !== $this->requestParam && \is_array($this->requestParam)) {
                $n = 0;
                foreach ($this->requestParam as $item) {
                    $res['RequestParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParam'])) {
            if (!empty($map['RequestParam'])) {
                $model->requestParam = [];
                $n                   = 0;
                foreach ($map['RequestParam'] as $item) {
                    $model->requestParam[$n++] = null !== $item ? requestParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
