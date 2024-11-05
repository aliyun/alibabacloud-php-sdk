<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig;

use AlibabaCloud\Tea\Model;

class deny extends Model
{
    /**
     * @description The type of command control. Valid values:
     *
     *   **black**: blacklist mode.
     *   **white**: whitelist mode.
     *
     * This parameter is required.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The commands to be controlled.
     *
     * > This parameter is required if AclType is set to white.
     * @var string[]
     */
    public $commands;
    protected $_name = [
        'aclType'  => 'AclType',
        'commands' => 'Commands',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deny
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = $map['Commands'];
            }
        }

        return $model;
    }
}
