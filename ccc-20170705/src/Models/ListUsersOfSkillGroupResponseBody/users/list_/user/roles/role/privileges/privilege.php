<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles\role\privileges;

use AlibabaCloud\Tea\Model;

class privilege extends Model
{
    /**
     * @var string
     */
    public $privilegeName;

    /**
     * @var string
     */
    public $privilegeId;

    /**
     * @var string
     */
    public $privilegeDescription;
    protected $_name = [
        'privilegeName'        => 'PrivilegeName',
        'privilegeId'          => 'PrivilegeId',
        'privilegeDescription' => 'PrivilegeDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privilegeName) {
            $res['PrivilegeName'] = $this->privilegeName;
        }
        if (null !== $this->privilegeId) {
            $res['PrivilegeId'] = $this->privilegeId;
        }
        if (null !== $this->privilegeDescription) {
            $res['PrivilegeDescription'] = $this->privilegeDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privilege
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivilegeName'])) {
            $model->privilegeName = $map['PrivilegeName'];
        }
        if (isset($map['PrivilegeId'])) {
            $model->privilegeId = $map['PrivilegeId'];
        }
        if (isset($map['PrivilegeDescription'])) {
            $model->privilegeDescription = $map['PrivilegeDescription'];
        }

        return $model;
    }
}
