<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetImageSensitiveFileStatusRequest extends Model
{
    /**
     * @example f382fccd88b94c5c8c864def6815b854,ac32fccd88b94c5c8c864def6815bo9z
     *
     * @var string
     */
    public $imageUuids;

    /**
     * @example pem
     *
     * @var string
     */
    public $sensitiveFileKey;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'imageUuids'       => 'ImageUuids',
        'sensitiveFileKey' => 'SensitiveFileKey',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUuids) {
            $res['ImageUuids'] = $this->imageUuids;
        }
        if (null !== $this->sensitiveFileKey) {
            $res['SensitiveFileKey'] = $this->sensitiveFileKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetImageSensitiveFileStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUuids'])) {
            $model->imageUuids = $map['ImageUuids'];
        }
        if (isset($map['SensitiveFileKey'])) {
            $model->sensitiveFileKey = $map['SensitiveFileKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
