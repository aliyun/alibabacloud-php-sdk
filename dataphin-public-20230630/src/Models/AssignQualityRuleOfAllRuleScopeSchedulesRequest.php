<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AssignQualityRuleOfAllRuleScopeSchedulesRequest\assignCommand;

class AssignQualityRuleOfAllRuleScopeSchedulesRequest extends Model
{
    /**
     * @var assignCommand
     */
    public $assignCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'assignCommand' => 'AssignCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->assignCommand) {
            $this->assignCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignCommand) {
            $res['AssignCommand'] = null !== $this->assignCommand ? $this->assignCommand->toArray($noStream) : $this->assignCommand;
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
        if (isset($map['AssignCommand'])) {
            $model->assignCommand = assignCommand::fromMap($map['AssignCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
