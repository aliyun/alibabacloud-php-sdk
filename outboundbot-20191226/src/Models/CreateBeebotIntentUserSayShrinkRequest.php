<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateBeebotIntentUserSayShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example e5035654-1745-484a-8c5b-165f7c7bcd79
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example c5c5d8c0-c0f1-48a7-be2b-dc46006d888a
     *
     * @var string
     */
    public $scriptId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userSayDefinitionShrink;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
        'userSayDefinitionShrink' => 'UserSayDefinition',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->userSayDefinitionShrink) {
            $res['UserSayDefinition'] = $this->userSayDefinitionShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBeebotIntentUserSayShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['UserSayDefinition'])) {
            $model->userSayDefinitionShrink = $map['UserSayDefinition'];
        }

        return $model;
    }
}
