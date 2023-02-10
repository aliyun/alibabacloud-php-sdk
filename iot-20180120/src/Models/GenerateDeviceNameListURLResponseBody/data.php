<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GenerateDeviceNameListURLResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cS8uRRy54Rsz****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com/ota/65dfcda0473be29836dfde585472****\/ck2nfzljo00023g7kysg0****.csv
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @example ota/65dfcda0473be29836dfde585472****\/ck2nfzljo00023g7kysg0****.csv
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

    /**
     * @example 2019-11-04T06:21:54.607Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'fileUrl'       => 'FileUrl',
        'host'          => 'Host',
        'key'           => 'Key',
        'objectStorage' => 'ObjectStorage',
        'policy'        => 'Policy',
        'signature'     => 'Signature',
        'utcCreate'     => 'UtcCreate',
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
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->objectStorage) {
            $res['ObjectStorage'] = $this->objectStorage;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
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
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ObjectStorage'])) {
            $model->objectStorage = $map['ObjectStorage'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
