<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ExecuteAdHocTaskRequest\executeCommand;
use AlibabaCloud\Tea\Model;

class ExecuteAdHocTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var executeCommand
     */
    public $executeCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'executeCommand' => 'ExecuteCommand',
        'opTenantId'     => 'OpTenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeCommand) {
            $res['ExecuteCommand'] = null !== $this->executeCommand ? $this->executeCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteAdHocTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecuteCommand'])) {
            $model->executeCommand = executeCommand::fromMap($map['ExecuteCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
