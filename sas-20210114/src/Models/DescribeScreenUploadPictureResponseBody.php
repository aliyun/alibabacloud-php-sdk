<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenUploadPictureResponseBody extends Model
{
    /**
     * @example D65AADFC-1D20-5A6A-8F6A-9FA53C0Dxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example http://security-pic.oss-cn-hangzhou.aliyuncs.com/screenLogo/1766185894104675/c28bd4d2-c5c1-43f8-9ef5-de41d76218eb?Expires=1723720214&OSSAccessKeyId=LTAI4G1mgPbjvGQuiV1Xxxxx&Signature=4o3xxxx
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'requestId' => 'RequestId',
        'url' => 'Url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenUploadPictureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
