<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\serviceConfig\mockHeaders;

use AlibabaCloud\Tea\Model;

class mockHeader extends Model
{
    /**
     * @description The HTTP header.
     *
     * @example Content-Length
     *
     * @var string
     */
    public $headerName;

    /**
     * @description The value of the HTTP header.
     *
     * @example 86400
     *
     * @var string
     */
    public $headerValue;
    protected $_name = [
        'headerName'  => 'HeaderName',
        'headerValue' => 'HeaderValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
        }
        if (null !== $this->headerValue) {
            $res['HeaderValue'] = $this->headerValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mockHeader
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }
        if (isset($map['HeaderValue'])) {
            $model->headerValue = $map['HeaderValue'];
        }

        return $model;
    }
}
