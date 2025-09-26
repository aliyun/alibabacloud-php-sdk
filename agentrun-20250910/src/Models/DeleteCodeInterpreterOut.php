<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class DeleteCodeInterpreterOut extends Model
{
    /**
     * @var string
     */
    public $codeInterpreterId;

    /**
     * @var string
     */
    public $codeInterpreterName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'codeInterpreterId' => 'codeInterpreterId',
        'codeInterpreterName' => 'codeInterpreterName',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeInterpreterId) {
            $res['codeInterpreterId'] = $this->codeInterpreterId;
        }

        if (null !== $this->codeInterpreterName) {
            $res['codeInterpreterName'] = $this->codeInterpreterName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['codeInterpreterId'])) {
            $model->codeInterpreterId = $map['codeInterpreterId'];
        }

        if (isset($map['codeInterpreterName'])) {
            $model->codeInterpreterName = $map['codeInterpreterName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
