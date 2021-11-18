<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles\role\privileges;

use AlibabaCloud\Tea\Model;

class privilege extends Model
{
    /**
     * @var string
     */
    public $privilegeDescription;

    /**
     * @var string
     */
    public $privilegeId;

    /**
     * @var string
     */
    public $privilegeName;
    protected $_name = [
        'privilegeDescription' => 'PrivilegeDescription',
        'privilegeId'          => 'PrivilegeId',
        'privilegeName'        => 'PrivilegeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privilegeDescription) {
            $res['PrivilegeDescription'] = $this->privilegeDescription;
        }
        if (null !== $this->privilegeId) {
            $res['PrivilegeId'] = $this->privilegeId;
        }
        if (null !== $this->privilegeName) {
            $res['PrivilegeName'] = $this->privilegeName;
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
        if (isset($map['PrivilegeDescription'])) {
            $model->privilegeDescription = $map['PrivilegeDescription'];
        }
        if (isset($map['PrivilegeId'])) {
            $model->privilegeId = $map['PrivilegeId'];
        }
        if (isset($map['PrivilegeName'])) {
            $model->privilegeName = $map['PrivilegeName'];
        }

        return $model;
    }
}
