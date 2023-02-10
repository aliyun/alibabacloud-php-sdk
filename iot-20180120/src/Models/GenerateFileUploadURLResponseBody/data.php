<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GenerateFileUploadURLResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example https://iotx-bucket-name.oss-***.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example subpath/65dfcda0473be29836dfde585472****\/ck2nfzljo00023g7kysg0****.suffix
     *
     * @var string
     */
    public $key;

    /**
     * @example OSS
     *
     * @var string
     */
    public $objectStorage;

    /**
     * @example cS8uRRy54Rsz****
     *
     * @var string
     */
    public $ossAccessKeyId;

    /**
     * @example eyJleHBpcmF****
     *
     * @var string
     */
    public $policy;

    /**
     * @example v6lViO4FBvfquajQjg20K5hK****
     *
     * @var string
     */
    public $signature;
    protected $_name = [
        'host'           => 'Host',
        'key'            => 'Key',
        'objectStorage'  => 'ObjectStorage',
        'ossAccessKeyId' => 'OssAccessKeyId',
        'policy'         => 'Policy',
        'signature'      => 'Signature',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->objectStorage) {
            $res['ObjectStorage'] = $this->objectStorage;
        }
        if (null !== $this->ossAccessKeyId) {
            $res['OssAccessKeyId'] = $this->ossAccessKeyId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
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
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ObjectStorage'])) {
            $model->objectStorage = $map['ObjectStorage'];
        }
        if (isset($map['OssAccessKeyId'])) {
            $model->ossAccessKeyId = $map['OssAccessKeyId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }

        return $model;
    }
}
