<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyTokenResponse\ossUploadToken;
use AlibabaCloud\Tea\Model;

class DescribeVerifyTokenResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $verifyPageUrl;

    /**
     * @var string
     */
    public $verifyToken;

    /**
     * @var ossUploadToken
     */
    public $ossUploadToken;
    protected $_name = [
        'requestId'      => 'RequestId',
        'verifyPageUrl'  => 'VerifyPageUrl',
        'verifyToken'    => 'VerifyToken',
        'ossUploadToken' => 'OssUploadToken',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('verifyPageUrl', $this->verifyPageUrl, true);
        Model::validateRequired('verifyToken', $this->verifyToken, true);
        Model::validateRequired('ossUploadToken', $this->ossUploadToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyPageUrl) {
            $res['VerifyPageUrl'] = $this->verifyPageUrl;
        }
        if (null !== $this->verifyToken) {
            $res['VerifyToken'] = $this->verifyToken;
        }
        if (null !== $this->ossUploadToken) {
            $res['OssUploadToken'] = null !== $this->ossUploadToken ? $this->ossUploadToken->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyTokenResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyPageUrl'])) {
            $model->verifyPageUrl = $map['VerifyPageUrl'];
        }
        if (isset($map['VerifyToken'])) {
            $model->verifyToken = $map['VerifyToken'];
        }
        if (isset($map['OssUploadToken'])) {
            $model->ossUploadToken = ossUploadToken::fromMap($map['OssUploadToken']);
        }

        return $model;
    }
}
