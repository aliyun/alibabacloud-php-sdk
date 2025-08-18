<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateUdfRequest\updateCommand;

class UpdateUdfRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var updateCommand
     */
    public $updateCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateCommand' => 'UpdateCommand',
    ];

    public function validate()
    {
        if (null !== $this->updateCommand) {
            $this->updateCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->updateCommand) {
            $res['UpdateCommand'] = null !== $this->updateCommand ? $this->updateCommand->toArray($noStream) : $this->updateCommand;
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

        if (isset($map['UpdateCommand'])) {
            $model->updateCommand = updateCommand::fromMap($map['UpdateCommand']);
        }

        return $model;
    }
}
