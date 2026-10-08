<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class StopPipelineIntegratedTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contextShrink;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;

    /**
     * @var string
     */
    public $stopCommandShrink;
    protected $_name = [
        'contextShrink' => 'Context',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
        'stopCommandShrink' => 'StopCommand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextShrink) {
            $res['Context'] = $this->contextShrink;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->stopCommandShrink) {
            $res['StopCommand'] = $this->stopCommandShrink;
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
        if (isset($map['Context'])) {
            $model->contextShrink = $map['Context'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['StopCommand'])) {
            $model->stopCommandShrink = $map['StopCommand'];
        }

        return $model;
    }
}
