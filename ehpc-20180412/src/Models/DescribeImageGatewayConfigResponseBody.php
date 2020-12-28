<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeImageGatewayConfigResponseBody\imagegw;
use AlibabaCloud\Tea\Model;

class DescribeImageGatewayConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var imagegw
     */
    public $imagegw;
    protected $_name = [
        'requestId' => 'RequestId',
        'imagegw'   => 'Imagegw',
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
        if (null !== $this->imagegw) {
            $res['Imagegw'] = null !== $this->imagegw ? $this->imagegw->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageGatewayConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Imagegw'])) {
            $model->imagegw = imagegw::fromMap($map['Imagegw']);
        }

        return $model;
    }
}
