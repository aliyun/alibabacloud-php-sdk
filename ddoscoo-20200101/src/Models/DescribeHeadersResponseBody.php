<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHeadersResponseBody\customHeader;
use AlibabaCloud\Tea\Model;

class DescribeHeadersResponseBody extends Model
{
    /**
     * @description The information about the custom header.
     *
     * @var customHeader
     */
    public $customHeader;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 48BC7BA5-69BE-5C31-A080-AFF2431AE48D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customHeader' => 'CustomHeader',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHeader) {
            $res['CustomHeader'] = null !== $this->customHeader ? $this->customHeader->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHeadersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomHeader'])) {
            $model->customHeader = customHeader::fromMap($map['CustomHeader']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
