<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ExportUserDevicesResponseBody extends Model
{
    /**
     * @example 748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://sase-export.oss-cn-hangzhou.aliyuncs.com/export%2Fapp-device%2F20240607154831.xlsx?Expires=1717746571&OSSAccessKeyId=********************
     *
     * @var string
     */
    public $signedUrl;
    protected $_name = [
        'requestId' => 'RequestId',
        'signedUrl' => 'SignedUrl',
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
        if (null !== $this->signedUrl) {
            $res['SignedUrl'] = $this->signedUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportUserDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignedUrl'])) {
            $model->signedUrl = $map['SignedUrl'];
        }

        return $model;
    }
}
