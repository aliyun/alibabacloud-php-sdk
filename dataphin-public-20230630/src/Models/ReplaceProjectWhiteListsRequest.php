<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ReplaceProjectWhiteListsRequest\replaceCommand;

class ReplaceProjectWhiteListsRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var replaceCommand
     */
    public $replaceCommand;
    protected $_name = [
        'id' => 'Id',
        'opTenantId' => 'OpTenantId',
        'replaceCommand' => 'ReplaceCommand',
    ];

    public function validate()
    {
        if (null !== $this->replaceCommand) {
            $this->replaceCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->replaceCommand) {
            $res['ReplaceCommand'] = null !== $this->replaceCommand ? $this->replaceCommand->toArray($noStream) : $this->replaceCommand;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['ReplaceCommand'])) {
            $model->replaceCommand = replaceCommand::fromMap($map['ReplaceCommand']);
        }

        return $model;
    }
}
