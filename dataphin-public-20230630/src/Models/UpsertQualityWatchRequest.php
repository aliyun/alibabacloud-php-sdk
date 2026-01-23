<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityWatchRequest\upsertCommand;

class UpsertQualityWatchRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var upsertCommand
     */
    public $upsertCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'upsertCommand' => 'UpsertCommand',
    ];

    public function validate()
    {
        if (null !== $this->upsertCommand) {
            $this->upsertCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->upsertCommand) {
            $res['UpsertCommand'] = null !== $this->upsertCommand ? $this->upsertCommand->toArray($noStream) : $this->upsertCommand;
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

        if (isset($map['UpsertCommand'])) {
            $model->upsertCommand = upsertCommand::fromMap($map['UpsertCommand']);
        }

        return $model;
    }
}
