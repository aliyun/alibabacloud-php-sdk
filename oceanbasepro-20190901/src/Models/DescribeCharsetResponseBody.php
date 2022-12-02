<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetResponseBody\charset;
use AlibabaCloud\Tea\Model;

class DescribeCharsetResponseBody extends Model
{
    /**
     * @var charset[]
     */
    public $charset;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'charset'   => 'Charset',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = [];
            if (null !== $this->charset && \is_array($this->charset)) {
                $n = 0;
                foreach ($this->charset as $item) {
                    $res['Charset'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCharsetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            if (!empty($map['Charset'])) {
                $model->charset = [];
                $n              = 0;
                foreach ($map['Charset'] as $item) {
                    $model->charset[$n++] = null !== $item ? charset::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
