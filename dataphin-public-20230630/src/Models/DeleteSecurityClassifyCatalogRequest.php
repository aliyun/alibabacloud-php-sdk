<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteSecurityClassifyCatalogRequest\deleteCommand;

class DeleteSecurityClassifyCatalogRequest extends Model
{
    /**
     * @var deleteCommand
     */
    public $deleteCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteCommand' => 'DeleteCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->deleteCommand) {
            $this->deleteCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteCommand) {
            $res['DeleteCommand'] = null !== $this->deleteCommand ? $this->deleteCommand->toArray($noStream) : $this->deleteCommand;
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
        if (isset($map['DeleteCommand'])) {
            $model->deleteCommand = deleteCommand::fromMap($map['DeleteCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
