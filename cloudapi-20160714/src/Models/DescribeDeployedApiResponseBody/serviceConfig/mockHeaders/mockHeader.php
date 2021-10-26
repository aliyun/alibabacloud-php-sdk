<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\serviceConfig\mockHeaders;

use AlibabaCloud\Tea\Model;

class mockHeader extends Model
{
    /**
     * @var string
     */
    public $headerValue;

    /**
     * @var string
     */
    public $headerName;
    protected $_name = [
        'headerValue' => 'HeaderValue',
        'headerName'  => 'HeaderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerValue) {
            $res['HeaderValue'] = $this->headerValue;
        }
        if (null !== $this->headerName) {
            $res['HeaderName'] = $this->headerName;
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
        if (isset($map['HeaderValue'])) {
            $model->headerValue = $map['HeaderValue'];
        }
        if (isset($map['HeaderName'])) {
            $model->headerName = $map['HeaderName'];
        }

        return $model;
    }
}
