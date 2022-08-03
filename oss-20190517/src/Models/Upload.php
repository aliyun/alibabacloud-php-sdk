<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class Upload extends Model
{
    /**
     * @var string
     */
    public $initiated;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $uploadId;
    protected $_name = [
        'initiated' => 'Initiated',
        'key'       => 'Key',
        'uploadId'  => 'UploadId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->initiated) {
            $res['Initiated'] = $this->initiated;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->uploadId) {
            $res['UploadId'] = $this->uploadId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Upload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Initiated'])) {
            $model->initiated = $map['Initiated'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['UploadId'])) {
            $model->uploadId = $map['UploadId'];
        }

        return $model;
    }
}
