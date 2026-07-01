<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationRecordRunCodeRequest\codeCommand;

class GetOperationRecordRunCodeRequest extends Model
{
    /**
     * @var codeCommand
     */
    public $codeCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'codeCommand' => 'CodeCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->codeCommand) {
            $this->codeCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeCommand) {
            $res['CodeCommand'] = null !== $this->codeCommand ? $this->codeCommand->toArray($noStream) : $this->codeCommand;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
        if (isset($map['CodeCommand'])) {
            $model->codeCommand = codeCommand::fromMap($map['CodeCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
