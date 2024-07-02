<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class ApplyFileUploadLeaseRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example 19657c391f6c70bcea63c154d8606bb3
     *
     * @var string
     */
    public $md5;

    /**
     * @description This parameter is required.
     *
     * @example 1000
     *
     * @var string
     */
    public $sizeInBytes;
    protected $_name = [
        'fileName'    => 'FileName',
        'md5'         => 'Md5',
        'sizeInBytes' => 'SizeInBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->sizeInBytes) {
            $res['SizeInBytes'] = $this->sizeInBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyFileUploadLeaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['SizeInBytes'])) {
            $model->sizeInBytes = $map['SizeInBytes'];
        }

        return $model;
    }
}
