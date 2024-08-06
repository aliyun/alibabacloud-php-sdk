<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateOssSubDirectoryRequest extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition cluster.
     *
     * This parameter is required.
     * @example amv-bp149vz49b36t****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The OSS path where you want to create a subdirectory.
     *
     * This parameter is required.
     * @example oss://testBucketName/das_lakehouse
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'path'        => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOssSubDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
