<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessPointRequest extends Model
{
    /**
     * @description The ID of the access point.
     *
     * This parameter is required.
     *
     * @example ap-ie15yd****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'accessPointId' => 'AccessPointId',
        'fileSystemId' => 'FileSystemId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
