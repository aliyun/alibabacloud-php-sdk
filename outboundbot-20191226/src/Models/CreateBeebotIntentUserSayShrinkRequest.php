<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class CreateBeebotIntentUserSayShrinkRequest extends Model
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
     * @var string
     */
    public $userSayDefinitionShrink;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scriptId' => 'ScriptId',
        'userSayDefinitionShrink' => 'UserSayDefinition',
    ];

    public function validate()
    {
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

        if (null !== $this->userSayDefinitionShrink) {
            $res['UserSayDefinition'] = $this->userSayDefinitionShrink;
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
            $model->userSayDefinitionShrink = $map['UserSayDefinition'];
        }

        return $model;
    }
}
