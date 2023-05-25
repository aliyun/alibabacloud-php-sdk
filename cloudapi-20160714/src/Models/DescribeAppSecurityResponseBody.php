<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppSecurityResponseBody extends Model
{
    /**
     * @example 3aaf905a0a1f4f0eabc6d891dfa08afc
     *
     * @var string
     */
    public $appCode;

    /**
     * @example 60030986
     *
     * @var string
     */
    public $appKey;

    /**
     * @example c1ae97aaa7e45f21d10824bc44678fee
     *
     * @var string
     */
    public $appSecret;

    /**
     * @example 2016-07-31T04:10:19Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 2016-07-31T04:10:19Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ015
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appCode'      => 'AppCode',
        'appKey'       => 'AppKey',
        'appSecret'    => 'AppSecret',
        'createdTime'  => 'CreatedTime',
        'modifiedTime' => 'ModifiedTime',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
