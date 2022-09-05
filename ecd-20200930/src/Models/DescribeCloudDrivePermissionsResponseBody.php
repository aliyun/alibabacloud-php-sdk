<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsResponseBody\cloudDrivePermissionModels;
use AlibabaCloud\Tea\Model;

class DescribeCloudDrivePermissionsResponseBody extends Model
{
    /**
     * @var cloudDrivePermissionModels[]
     */
    public $cloudDrivePermissionModels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cloudDrivePermissionModels' => 'CloudDrivePermissionModels',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudDrivePermissionModels) {
            $res['CloudDrivePermissionModels'] = [];
            if (null !== $this->cloudDrivePermissionModels && \is_array($this->cloudDrivePermissionModels)) {
                $n = 0;
                foreach ($this->cloudDrivePermissionModels as $item) {
                    $res['CloudDrivePermissionModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudDrivePermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudDrivePermissionModels'])) {
            if (!empty($map['CloudDrivePermissionModels'])) {
                $model->cloudDrivePermissionModels = [];
                $n                                 = 0;
                foreach ($map['CloudDrivePermissionModels'] as $item) {
                    $model->cloudDrivePermissionModels[$n++] = null !== $item ? cloudDrivePermissionModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
