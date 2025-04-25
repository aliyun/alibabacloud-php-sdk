<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ModifyBeebotIntentUserSayRequest\userSayDefinition;

class ModifyBeebotIntentUserSayRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var userSayDefinition
     */
    public $userSayDefinition;

    /**
     * @var string
     */
    public $userSayId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
        'userSayDefinition' => 'UserSayDefinition',
        'userSayId' => 'UserSayId',
    ];

    public function validate()
    {
        if (null !== $this->userSayDefinition) {
            $this->userSayDefinition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->userSayDefinition) {
            $res['UserSayDefinition'] = null !== $this->userSayDefinition ? $this->userSayDefinition->toArray($noStream) : $this->userSayDefinition;
        }

        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['UserSayDefinition'])) {
            $model->userSayDefinition = userSayDefinition::fromMap($map['UserSayDefinition']);
        }

        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }

        return $model;
    }
}
