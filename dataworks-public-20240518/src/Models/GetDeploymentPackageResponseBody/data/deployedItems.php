<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentPackageResponseBody\data;

use AlibabaCloud\Tea\Model;

class deployedItems extends Model
{
    /**
     * @example 5076****
     *
     * @var int
     */
    public $fileId;

    /**
     * @example 7
     *
     * @var int
     */
    public $fileVersion;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'fileId' => 'FileId',
        'fileVersion' => 'FileVersion',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
