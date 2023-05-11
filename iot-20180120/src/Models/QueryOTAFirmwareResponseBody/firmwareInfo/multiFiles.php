<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryOTAFirmwareResponseBody\firmwareInfo;

use AlibabaCloud\Tea\Model;

class multiFiles extends Model
{
    /**
     * @description The MD5 value of the OTA update package file.
     *
     * @example 3d04ab6462633508606e5f3d****
     *
     * @var string
     */
    public $fileMd5;

    /**
     * @description The name of the OTA update package file.
     *
     * @example firmware1
     *
     * @var string
     */
    public $name;

    /**
     * @description The signature of the OTA update package file.
     *
     * @example 3d04ab6462633508606e5f3d****
     *
     * @var string
     */
    public $signValue;

    /**
     * @description The size of the OTA update package file. Unit: bytes.
     *
     * @example 200
     *
     * @var int
     */
    public $size;

    /**
     * @description The URL of the update package file that is stored in Object Storage Service (OSS).
     *
     * @example https://ota-***.aliyuncs.com/ota/572ef2fd12ca4791a5b21a9eb948****\/5E962CF83DB1495E8337E9C8A4D1****.bin?Expires=1577587360&OSSAccessKeyId=cS8uRRy54Rsz****&Signature=farzC8%2FVMN4HYdEtXvdiC2OevH****
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'fileMd5'   => 'FileMd5',
        'name'      => 'Name',
        'signValue' => 'SignValue',
        'size'      => 'Size',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->signValue) {
            $res['SignValue'] = $this->signValue;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multiFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SignValue'])) {
            $model->signValue = $map['SignValue'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
