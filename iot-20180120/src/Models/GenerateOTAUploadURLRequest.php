<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GenerateOTAUploadURLRequest extends Model
{
    /**
     * @description The file name extension of the update package file. Valid values: bin, dav, apk, tar, gz, tar.gz, zip, and gzip.
     *
     * Default value: bin.
     * @example apk
     *
     * @var string
     */
    public $fileSuffix;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.
     * >*   If no **Overview** page or ID is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'fileSuffix'    => 'FileSuffix',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSuffix) {
            $res['FileSuffix'] = $this->fileSuffix;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOTAUploadURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSuffix'])) {
            $model->fileSuffix = $map['FileSuffix'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
