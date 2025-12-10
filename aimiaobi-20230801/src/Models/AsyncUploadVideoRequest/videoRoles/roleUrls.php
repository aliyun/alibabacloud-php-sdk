<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncUploadVideoRequest\videoRoles;

use AlibabaCloud\Dara\Model;

class roleUrls extends Model
{
    /**
     * @var string
     */
    public $roleFileName;

    /**
     * @var string
     */
    public $roleFileUrl;
    protected $_name = [
        'roleFileName' => 'RoleFileName',
        'roleFileUrl' => 'RoleFileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleFileName) {
            $res['RoleFileName'] = $this->roleFileName;
        }

        if (null !== $this->roleFileUrl) {
            $res['RoleFileUrl'] = $this->roleFileUrl;
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
        if (isset($map['RoleFileName'])) {
            $model->roleFileName = $map['RoleFileName'];
        }

        if (isset($map['RoleFileUrl'])) {
            $model->roleFileUrl = $map['RoleFileUrl'];
        }

        return $model;
    }
}
