<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitQualityWatchTasksRequest\submitCommand;

class SubmitQualityWatchTasksRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var submitCommand
     */
    public $submitCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'submitCommand' => 'SubmitCommand',
    ];

    public function validate()
    {
        if (null !== $this->submitCommand) {
            $this->submitCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->submitCommand) {
            $res['SubmitCommand'] = null !== $this->submitCommand ? $this->submitCommand->toArray($noStream) : $this->submitCommand;
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

        if (isset($map['SubmitCommand'])) {
            $model->submitCommand = submitCommand::fromMap($map['SubmitCommand']);
        }

        return $model;
    }
}
