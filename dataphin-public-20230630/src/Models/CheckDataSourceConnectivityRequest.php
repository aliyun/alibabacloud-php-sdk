<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckDataSourceConnectivityRequest\checkCommand;

class CheckDataSourceConnectivityRequest extends Model
{
    /**
     * @var checkCommand
     */
    public $checkCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'checkCommand' => 'CheckCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->checkCommand) {
            $this->checkCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkCommand) {
            $res['CheckCommand'] = null !== $this->checkCommand ? $this->checkCommand->toArray($noStream) : $this->checkCommand;
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
        if (isset($map['CheckCommand'])) {
            $model->checkCommand = checkCommand::fromMap($map['CheckCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
