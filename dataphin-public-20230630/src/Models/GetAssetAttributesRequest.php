<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetAttributesRequest\queryCommand;

class GetAssetAttributesRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;

    /**
     * @var queryCommand
     */
    public $queryCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
        'queryCommand' => 'QueryCommand',
    ];

    public function validate()
    {
        if (null !== $this->queryCommand) {
            $this->queryCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->queryCommand) {
            $res['QueryCommand'] = null !== $this->queryCommand ? $this->queryCommand->toArray($noStream) : $this->queryCommand;
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

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['QueryCommand'])) {
            $model->queryCommand = queryCommand::fromMap($map['QueryCommand']);
        }

        return $model;
    }
}
