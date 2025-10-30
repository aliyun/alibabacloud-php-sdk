<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OfflinePipelineRequest\context;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OfflinePipelineRequest\offlineCommand;

class OfflinePipelineRequest extends Model
{
    /**
     * @var context
     */
    public $context;

    /**
     * @var offlineCommand
     */
    public $offlineCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'context' => 'Context',
        'offlineCommand' => 'OfflineCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (null !== $this->offlineCommand) {
            $this->offlineCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

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
        if (isset($map['Context'])) {
            $model->context = context::fromMap($map['Context']);
        }

        if (isset($map['OfflineCommand'])) {
            $model->offlineCommand = offlineCommand::fromMap($map['OfflineCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
