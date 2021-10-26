<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppSecurityResponseBody extends Model
{
    /**
     * @var string
     */
    public $appSecret;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $createdTime;
    protected $_name = [
        'appSecret'    => 'AppSecret',
        'requestId'    => 'RequestId',
        'appKey'       => 'AppKey',
        'modifiedTime' => 'ModifiedTime',
        'appCode'      => 'AppCode',
        'createdTime'  => 'CreatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppSecurityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
