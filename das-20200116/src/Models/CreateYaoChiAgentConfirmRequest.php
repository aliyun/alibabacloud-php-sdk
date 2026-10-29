<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class CreateYaoChiAgentConfirmRequest extends Model
{
    /**
     * @var bool
     */
    public $approved;

    /**
     * @var string
     */
    public $confirmationId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $toolArgs;
    protected $_name = [
        'approved' => 'Approved',
        'confirmationId' => 'ConfirmationId',
        'sessionId' => 'SessionId',
        'toolArgs' => 'ToolArgs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approved) {
            $res['Approved'] = $this->approved;
        }

        if (null !== $this->confirmationId) {
            $res['ConfirmationId'] = $this->confirmationId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->toolArgs) {
            $res['ToolArgs'] = $this->toolArgs;
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
        if (isset($map['Approved'])) {
            $model->approved = $map['Approved'];
        }

        if (isset($map['ConfirmationId'])) {
            $model->confirmationId = $map['ConfirmationId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['ToolArgs'])) {
            $model->toolArgs = $map['ToolArgs'];
        }

        return $model;
    }
}
