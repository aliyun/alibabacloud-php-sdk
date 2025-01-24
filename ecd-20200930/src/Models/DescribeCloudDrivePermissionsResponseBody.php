<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsResponseBody\cloudDrivePermissionModels;

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
        if (\is_array($this->cloudDrivePermissionModels)) {
            Model::validateArray($this->cloudDrivePermissionModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudDrivePermissionModels) {
            if (\is_array($this->cloudDrivePermissionModels)) {
                $res['CloudDrivePermissionModels'] = [];
                $n1                                = 0;
                foreach ($this->cloudDrivePermissionModels as $item1) {
                    $res['CloudDrivePermissionModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudDrivePermissionModels'])) {
            if (!empty($map['CloudDrivePermissionModels'])) {
                $model->cloudDrivePermissionModels = [];
                $n1                                = 0;
                foreach ($map['CloudDrivePermissionModels'] as $item1) {
                    $model->cloudDrivePermissionModels[$n1++] = cloudDrivePermissionModels::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
