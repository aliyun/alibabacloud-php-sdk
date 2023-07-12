<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GenerateOTAUploadURLRequest extends Model
{
    /**
     * @var string
     */
    public $fileSuffix;

    /**
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
