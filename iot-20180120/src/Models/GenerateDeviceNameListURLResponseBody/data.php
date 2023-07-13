<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GenerateDeviceNameListURLResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The AccessKey ID of the bucket owner.
     *
     * The OSS bucket stores the file.
     * @example cS8uRRy54Rsz****
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description The URL of the file that is stored in OSS.
     *
     * After the device list file is uploaded, this parameter is used to call the [CreateOTAStaticUpgradeJob](~~147496~~) operation to create a static update batch.
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com/ota/65dfcda0473be29836dfde585472****\/ck2nfzljo00023g7kysg0****.csv
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @description The endpoint of OSS.
     *
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The full path of the file in OSS. You can call the OSS PostObject operation to upload the file to OSS.
     *
     * @example ota/65dfcda0473be29836dfde585472****\/ck2nfzljo00023g7kysg0****.csv
     *
     * @var string
     */
    public $key;

    /**
     * @description The type of the object storage. Default value: OSS.
     *
     * @example OSS
     *
     * @var string
     */
    public $objectStorage;

    /**
     * @description The parameter that is used by OSS to verify form fields for the request.
     *
     * @example eyJleHBpcmF****
     *
     * @var string
     */
    public $policy;

    /**
     * @description The signature that is calculated based on **AccessKeySecret** and **Policy**. When you call an OSS operation, OSS uses the signature information to verify the POST request.
     *
     * @example v6lViO4FBvfquajQjg20K5hK****
     *
     * @var string
     */
    public $signature;

    /**
     * @description The time when the URL of the file that you want to upload was generated. The time is displayed in UTC.
     *
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
