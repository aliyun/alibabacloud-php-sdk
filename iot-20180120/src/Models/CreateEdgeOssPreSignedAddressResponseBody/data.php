<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateEdgeOssPreSignedAddressResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example http://xxxx.oss-cn-shanghai.aliyuncs.com/driver/a534d3b81*******8fe7da0/DRIVER_VERSION_CONTENT/df9b9f441*********4c90d0c21d14/2.0.0/1581586102750/driver_code.zip
     *
     * @var string
     */
    public $ossAddress;

    /**
     * @example http://xxxx.oss-cn-shanghai.aliyuncs.com/driver/a534d3b81*******8fe7da0/DRIVER_VERSION_CONTENT/df9b9f441*********4c90d0c21d14/2.0.0/1581586102750/driver_code.zip?Expires\u003d1581586402\u0026OSSAccessKeyId\u003daS4MT0IYrP******\u0026Signature\u003dIUUjZ881H3rUoCOwjMXPmGbw******
     *
     * @var string
     */
    public $ossPreSignedAddress;
    protected $_name = [
        'ossAddress'          => 'OssAddress',
        'ossPreSignedAddress' => 'OssPreSignedAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossAddress) {
            $res['OssAddress'] = $this->ossAddress;
        }
        if (null !== $this->ossPreSignedAddress) {
            $res['OssPreSignedAddress'] = $this->ossPreSignedAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssAddress'])) {
            $model->ossAddress = $map['OssAddress'];
        }
        if (isset($map['OssPreSignedAddress'])) {
            $model->ossPreSignedAddress = $map['OssPreSignedAddress'];
        }

        return $model;
    }
}
