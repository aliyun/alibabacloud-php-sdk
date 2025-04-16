<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OfflineBizEntityRequest\offlineCommand;

class OfflineBizEntityRequest extends Model
{
    /**
     * @var offlineCommand
     */
    public $offlineCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'offlineCommand' => 'OfflineCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->offlineCommand) {
            $this->offlineCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offlineCommand) {
            $res['OfflineCommand'] = null !== $this->offlineCommand ? $this->offlineCommand->toArray($noStream) : $this->offlineCommand;
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
        if (isset($map['OfflineCommand'])) {
            $model->offlineCommand = offlineCommand::fromMap($map['OfflineCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
