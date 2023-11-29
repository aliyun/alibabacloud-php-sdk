<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\GetUploadOssUrlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2023-07-26T06:33:11.175
     *
     * @var string
     */
    public $expectedExpirationTime;

    /**
     * @example open_api_create_project/oacp_4xd****vk
     *
     * @var string
     */
    public $ossKey;

    /**
     * @example https://cn-hangzhou-pre-omsstore.oss-cn-hangzhou.aliyuncs.com/open_api_create_project/oacp_4x****pvk?Expires=169031&OSSAccessKeyId=LTAI5tMN52D***TBf&Signature=XdDFPz%2BXKC***%2B
     *
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'expectedExpirationTime' => 'ExpectedExpirationTime',
        'ossKey'                 => 'OssKey',
        'ossUrl'                 => 'OssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expectedExpirationTime) {
            $res['ExpectedExpirationTime'] = $this->expectedExpirationTime;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
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
        if (isset($map['ExpectedExpirationTime'])) {
            $model->expectedExpirationTime = $map['ExpectedExpirationTime'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
