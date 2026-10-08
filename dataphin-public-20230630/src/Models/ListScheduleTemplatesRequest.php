<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleTemplatesRequest\listScheduleTemplatesCommand;

class ListScheduleTemplatesRequest extends Model
{
    /**
     * @var listScheduleTemplatesCommand
     */
    public $listScheduleTemplatesCommand;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'listScheduleTemplatesCommand' => 'ListScheduleTemplatesCommand',
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
    ];

    public function validate()
    {
        if (null !== $this->listScheduleTemplatesCommand) {
            $this->listScheduleTemplatesCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listScheduleTemplatesCommand) {
            $res['ListScheduleTemplatesCommand'] = null !== $this->listScheduleTemplatesCommand ? $this->listScheduleTemplatesCommand->toArray($noStream) : $this->listScheduleTemplatesCommand;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
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
        if (isset($map['ListScheduleTemplatesCommand'])) {
            $model->listScheduleTemplatesCommand = listScheduleTemplatesCommand::fromMap($map['ListScheduleTemplatesCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        return $model;
    }
}
