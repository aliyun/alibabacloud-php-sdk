<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDrivePermissionsResponseBody;

use AlibabaCloud\Dara\Model;

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
        'endUsers' => 'EndUsers',
        'permission' => 'Permission',
    ];

    public function validate()
    {
        if (\is_array($this->endUsers)) {
            Model::validateArray($this->endUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endUsers) {
            if (\is_array($this->endUsers)) {
                $res['EndUsers'] = [];
                $n1 = 0;
                foreach ($this->endUsers as $item1) {
                    $res['EndUsers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
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
        if (isset($map['EndUsers'])) {
            if (!empty($map['EndUsers'])) {
                $model->endUsers = [];
                $n1 = 0;
                foreach ($map['EndUsers'] as $item1) {
                    $model->endUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }

        return $model;
    }
}
