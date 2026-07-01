<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationRecordDetailRequest\recordDetailCommand;

class GetOperationRecordDetailRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var recordDetailCommand
     */
    public $recordDetailCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'recordDetailCommand' => 'RecordDetailCommand',
    ];

    public function validate()
    {
        if (null !== $this->recordDetailCommand) {
            $this->recordDetailCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->recordDetailCommand) {
            $res['RecordDetailCommand'] = null !== $this->recordDetailCommand ? $this->recordDetailCommand->toArray($noStream) : $this->recordDetailCommand;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['RecordDetailCommand'])) {
            $model->recordDetailCommand = recordDetailCommand::fromMap($map['RecordDetailCommand']);
        }

        return $model;
    }
}
