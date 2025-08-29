<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RetryTransferOwnershipRequest\privilegeTransferRecord;

class RetryTransferOwnershipRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var privilegeTransferRecord
     */
    public $privilegeTransferRecord;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'privilegeTransferRecord' => 'PrivilegeTransferRecord',
    ];

    public function validate()
    {
        if (null !== $this->privilegeTransferRecord) {
            $this->privilegeTransferRecord->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->privilegeTransferRecord) {
            $res['PrivilegeTransferRecord'] = null !== $this->privilegeTransferRecord ? $this->privilegeTransferRecord->toArray($noStream) : $this->privilegeTransferRecord;
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

        if (isset($map['PrivilegeTransferRecord'])) {
            $model->privilegeTransferRecord = privilegeTransferRecord::fromMap($map['PrivilegeTransferRecord']);
        }

        return $model;
    }
}
