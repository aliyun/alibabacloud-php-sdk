<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAFirmwareRequest;

use AlibabaCloud\Tea\Model;

class multiFiles extends Model
{
    /**
     * @description The MD5 value of the file.
     *
     * >  If you want to add multiple files to the OTA update package, you can configure this parameter. If you do not configure this parameter, the MD5 value of the file in OSS is used.
     * @example 93230c3bde425a9d7984a594ac56***
     *
     * @var string
     */
    public $fileMd5;

    /**
     * @description The name of the file in the update package. The name must be 1 to 32 characters in length. You can specify up to 20 file names. Each name must be unique in the OTA update package.
     *
     * > If you want to add multiple files to the OTA update package, you must configure this parameter.
     * @example Firmware1
     *
     * @var string
     */
    public $name;

    /**
     * @description The signature of the file. The value is calculated by using the specified **signature algorithm** to sign the file.
     *
     * >  If you want to add multiple files to the OTA update package, you can configure this parameter. If you do not configure this parameter, the MD5 value of the file in OSS is used as the file signature.
     * @example 93230c3bde425a9d7984a594ac45****
     *
     * @var string
     */
    public $signValue;

    /**
     * @description The size of the file in the OTA update package. Unit: bytes.
     *
     * >  If you want to add multiple files to the OTA update package, you can configure this parameter. If you do not configure this parameter, the size of the file in OSS is used.
     * @example 200
     *
     * @var int
     */
    public $size;

    /**
     * @description The URL of the file. This parameter specifies the storage location of the file in OSS. You can call the [GenerateOTAUploadURL](~~147310~~) operation to generate a URL for each file in the OTA update package.
     *
     * > If you want to add multiple files to the OTA update package, you must configure this parameter.
     * @example https://iotx-ota.oss-cn-shanghai.aliyuncs.com/ota/bcd6142594d0183a16d825ad8225****\/A6B3400B70CA4D6D872160D1A91A****.bin
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
