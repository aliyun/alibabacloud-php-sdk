<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeFileUploadSignedUrlResponseBody extends Model
{
    /**
     * @example 2fada31e-8fa5-****-b595-9698cd6b5f06
     *
     * @var string
     */
    public $id;

    /**
     * @example https://api.next.bspapp.com/oss_upload_callback
     *
     * @var string
     */
    public $ossCallbackUrl;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @example E9A50E1B-5ECE-42D4-B261-C07D1BBE68DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://bsppub.oss-cn-shanghai.aliyuncs.com/FBPSBVMO-myspace/41552d60-52de-xxx-a713-43e879b0717a.JPG?OSSAccessKeyId=LTAIk****dtFueLA&Expires=1582152512&Signature=sek1B0Xm2r***tNvfX9tX%2BBJxA%3D
     *
     * @var string
     */
    public $signUrl;
    protected $_name = [
        'id'             => 'Id',
        'ossCallbackUrl' => 'OssCallbackUrl',
        'overwrite'      => 'Overwrite',
        'requestId'      => 'RequestId',
        'signUrl'        => 'SignUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ossCallbackUrl) {
            $res['OssCallbackUrl'] = $this->ossCallbackUrl;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signUrl) {
            $res['SignUrl'] = $this->signUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFileUploadSignedUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OssCallbackUrl'])) {
            $model->ossCallbackUrl = $map['OssCallbackUrl'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignUrl'])) {
            $model->signUrl = $map['SignUrl'];
        }

        return $model;
    }
}
