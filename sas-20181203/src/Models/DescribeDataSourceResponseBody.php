<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas;
use AlibabaCloud\Tea\Model;

class DescribeDataSourceResponseBody extends Model
{
    /**
     * @description The metadata of the data sources.
     *
     * @var metaDatas[]
     */
    public $metaDatas;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 7532B7EE-7CE7-5F4D-BF04-B12447DDXXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'metaDatas' => 'MetaDatas',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaDatas) {
            $res['MetaDatas'] = [];
            if (null !== $this->metaDatas && \is_array($this->metaDatas)) {
                $n = 0;
                foreach ($this->metaDatas as $item) {
                    $res['MetaDatas'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaDatas'])) {
            if (!empty($map['MetaDatas'])) {
                $model->metaDatas = [];
                $n = 0;
                foreach ($map['MetaDatas'] as $item) {
                    $model->metaDatas[$n++] = null !== $item ? metaDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
