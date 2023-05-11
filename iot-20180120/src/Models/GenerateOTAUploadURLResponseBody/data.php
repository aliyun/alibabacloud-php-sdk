<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GenerateOTAUploadURLResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The URL of the update package file that is stored in OSS.
     *
     * After the update package file is uploaded, this parameter is used to call the [CreateOTAFirmware](~~147311~~) operation to create an update package.
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com/ota/65dfcda0473be29836dfde585472****\/ck2nfzljo00023g7kysg0****.bin
     *
     * @var string
     */
    public $firmwareUrl;

    /**
     * @description The endpoint of OSS.
     *
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $host;

    /**
     * @description The full path of the file in OSS. The file is uploaded by calling the OSS PostObject operation.
     *
     * @example ota/65dfcda0473be29836dfde585472****\/ck2nfzljo00023g7kysg0****.bin
     *
     * @var string
     */
    public $key;

    /**
     * @description The AccessKey ID of the bucket owner.
     *
     * This OSS bucket stores the update package file.
     * @example cS8uRRy54Rsz****
     *
     * @var string
     */
    public $OSSAccessKeyId;

    /**
     * @description The type of object storage. Default value: OSS.
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
     * @description The time when the URL of the uploaded update package file was generated. The time is displayed in UTC.
     *
     * @example 2019-11-04T06:21:54.607Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'firmwareUrl'    => 'FirmwareUrl',
        'host'           => 'Host',
        'key'            => 'Key',
        'OSSAccessKeyId' => 'OSSAccessKeyId',
        'objectStorage'  => 'ObjectStorage',
        'policy'         => 'Policy',
        'signature'      => 'Signature',
        'utcCreate'      => 'UtcCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firmwareUrl) {
            $res['FirmwareUrl'] = $this->firmwareUrl;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->OSSAccessKeyId) {
            $res['OSSAccessKeyId'] = $this->OSSAccessKeyId;
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
        if (isset($map['FirmwareUrl'])) {
            $model->firmwareUrl = $map['FirmwareUrl'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['OSSAccessKeyId'])) {
            $model->OSSAccessKeyId = $map['OSSAccessKeyId'];
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
