<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListOperationRecordRequest\listCommand;

class ListOperationRecordRequest extends Model
{
    /**
     * @var listCommand
     */
    public $listCommand;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'listCommand' => 'ListCommand',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
    ];

    public function validate()
    {
        if (null !== $this->listCommand) {
            $this->listCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listCommand) {
            $res['ListCommand'] = null !== $this->listCommand ? $this->listCommand->toArray($noStream) : $this->listCommand;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
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
        if (isset($map['ListCommand'])) {
            $model->listCommand = listCommand::fromMap($map['ListCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        return $model;
    }
}
