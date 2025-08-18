<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantDataServiceApiRequest\grantCommand;

class GrantDataServiceApiRequest extends Model
{
    /**
     * @var grantCommand
     */
    public $grantCommand;

    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'grantCommand' => 'GrantCommand',
        'opTenantId' => 'OpTenantId',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (null !== $this->grantCommand) {
            $this->grantCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantCommand) {
            $res['GrantCommand'] = null !== $this->grantCommand ? $this->grantCommand->toArray($noStream) : $this->grantCommand;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['GrantCommand'])) {
            $model->grantCommand = grantCommand::fromMap($map['GrantCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
