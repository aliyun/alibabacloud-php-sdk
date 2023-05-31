<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyGroupPropertyRequest extends Model
{
    /**
     * @description The new attributes of the server group. You can specify the following parameters to configure the attributes:
     *
     *   **groupFlag**: the type of the server group. Valid values: 0 and 1. The value **0** specifies the Default server group. The value **1** specifies other server groups.
     *   **groupId**: the ID of the server group.
     *   **groupIndex**: no meaning. You can leave this parameter empty.
     *   **groupName**: the name of the server group. The value is the new name of the server group. The new name cannot be the same as the original name of the server group.
     *
     * >  You can call the [DescribeAllGroups](~~DescribeAllGroups~~) operation to obtain the values of the groupFlag and groupId parameters. You cannot change the value of the groupFlag or groupId parameter. You can change only the value of the groupName parameter.
     * @example [{"groupFlag":1,"groupId":8436682,"groupIndex":,"groupName":"example"}]
     *
     * @var string
     */
    public $data;
    protected $_name = [
        'data' => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyGroupPropertyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
