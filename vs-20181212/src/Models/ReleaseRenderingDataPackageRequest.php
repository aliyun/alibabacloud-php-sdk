<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ReleaseRenderingDataPackageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dp-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $dataPackageId;
    protected $_name = [
        'dataPackageId' => 'DataPackageId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReleaseRenderingDataPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }

        return $model;
    }
}
