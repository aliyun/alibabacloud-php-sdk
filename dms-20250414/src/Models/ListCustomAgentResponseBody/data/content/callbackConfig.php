<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListCustomAgentResponseBody\data\content;

use AlibabaCloud\Dara\Model;

class callbackConfig extends Model
{
    /**
     * @var string
     */
    public $callbackArgs;

    /**
     * @var string
     */
    public $callbackPrompt;

    /**
     * @var int
     */
    public $callbackTime;

    /**
     * @var string
     */
    public $toolId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'callbackArgs' => 'CallbackArgs',
        'callbackPrompt' => 'CallbackPrompt',
        'callbackTime' => 'CallbackTime',
        'toolId' => 'ToolId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackArgs) {
            $res['CallbackArgs'] = $this->callbackArgs;
        }

        if (null !== $this->callbackPrompt) {
            $res['CallbackPrompt'] = $this->callbackPrompt;
        }

        if (null !== $this->callbackTime) {
            $res['CallbackTime'] = $this->callbackTime;
        }

        if (null !== $this->toolId) {
            $res['ToolId'] = $this->toolId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CallbackArgs'])) {
            $model->callbackArgs = $map['CallbackArgs'];
        }

        if (isset($map['CallbackPrompt'])) {
            $model->callbackPrompt = $map['CallbackPrompt'];
        }

        if (isset($map['CallbackTime'])) {
            $model->callbackTime = $map['CallbackTime'];
        }

        if (isset($map['ToolId'])) {
            $model->toolId = $map['ToolId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
