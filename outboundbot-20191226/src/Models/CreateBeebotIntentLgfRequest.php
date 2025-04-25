<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBeebotIntentLgfRequest\lgfDefinition;

class CreateBeebotIntentLgfRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var lgfDefinition
     */
    public $lgfDefinition;

    /**
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'lgfDefinition' => 'LgfDefinition',
        'scriptId' => 'ScriptId',
    ];

    public function validate()
    {
        if (null !== $this->lgfDefinition) {
            $this->lgfDefinition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lgfDefinition) {
            $res['LgfDefinition'] = null !== $this->lgfDefinition ? $this->lgfDefinition->toArray($noStream) : $this->lgfDefinition;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
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

        if (isset($map['LgfDefinition'])) {
            $model->lgfDefinition = lgfDefinition::fromMap($map['LgfDefinition']);
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
