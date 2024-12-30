<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand;
use AlibabaCloud\Tea\Model;

class SubmitBatchTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var submitCommand
     */
    public $submitCommand;
    protected $_name = [
        'opTenantId'    => 'OpTenantId',
        'submitCommand' => 'SubmitCommand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->submitCommand) {
            $res['SubmitCommand'] = null !== $this->submitCommand ? $this->submitCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitBatchTaskRequest
     */
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
