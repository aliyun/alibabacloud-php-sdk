<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetOperationRecordByIdRequest\detailCommand;

class GetOperationRecordByIdRequest extends Model
{
    /**
     * @var detailCommand
     */
    public $detailCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'detailCommand' => 'DetailCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->detailCommand) {
            $this->detailCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailCommand) {
            $res['DetailCommand'] = null !== $this->detailCommand ? $this->detailCommand->toArray($noStream) : $this->detailCommand;
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
        if (isset($map['DetailCommand'])) {
            $model->detailCommand = detailCommand::fromMap($map['DetailCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
