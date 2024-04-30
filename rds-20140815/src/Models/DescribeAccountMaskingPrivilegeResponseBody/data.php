<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountMaskingPrivilegeResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAccountMaskingPrivilegeResponseBody\data\userPrivilege;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var userPrivilege[]
     */
    public $userPrivilege;
    protected $_name = [
        'userPrivilege' => 'UserPrivilege',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrivilege) {
            $res['UserPrivilege'] = [];
            if (null !== $this->userPrivilege && \is_array($this->userPrivilege)) {
                $n = 0;
                foreach ($this->userPrivilege as $item) {
                    $res['UserPrivilege'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPrivilege'])) {
            if (!empty($map['UserPrivilege'])) {
                $model->userPrivilege = [];
                $n                    = 0;
                foreach ($map['UserPrivilege'] as $item) {
                    $model->userPrivilege[$n++] = null !== $item ? userPrivilege::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
