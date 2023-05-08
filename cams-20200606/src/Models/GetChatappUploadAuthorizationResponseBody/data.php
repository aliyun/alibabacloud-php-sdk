<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappUploadAuthorizationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The AccessKey ID that is used to authorize a user to upload a file to Object Storage Service (OSS).
     *
     * @example 2skeuurfj****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The AccessKey secret that is used to authorize a user to upload a file to OSS.
     *
     * @example skdkdukeuuuu****
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description The name of the bucket to which a file is uploaded in OSS.
     *
     * @example oss
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The directory to which a file is uploaded in OSS.
     *
     * @example 1000102939
     *
     * @var string
     */
    public $dir;

    /**
     * @description The address of the OSS server to which a file is uploaded.
     *
     * @example https://oss.com
     *
     * @var string
     */
    public $endPoint;

    /**
     * @description The timeout period.
     *
     * @example 3600
     *
     * @var int
     */
    public $expire;

    /**
     * @description The security token.
     *
     * @example dkdieiii**
     *
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'accessKeyId'     => 'AccessKeyId',
        'accessKeySecret' => 'AccessKeySecret',
        'bucketName'      => 'BucketName',
        'dir'             => 'Dir',
        'endPoint'        => 'EndPoint',
        'expire'          => 'Expire',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->dir) {
            $res['Dir'] = $this->dir;
        }
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Dir'])) {
            $model->dir = $map['Dir'];
        }
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
