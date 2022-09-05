<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsResponseBody;

use AlibabaCloud\Tea\Model;

class cloudDrivePermissionModels extends Model
{
    /**
     * @var string[]
     */
    public $endUsers;

    /**
     * @var string
     */
    public $permission;
    protected $_name = [
        'endUsers'   => 'EndUsers',
        'permission' => 'Permission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUsers) {
            $res['EndUsers'] = $this->endUsers;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudDrivePermissionModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUsers'])) {
            if (!empty($map['EndUsers'])) {
                $model->endUsers = $map['EndUsers'];
            }
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        return $model;
    }
}
