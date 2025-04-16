<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PublishObjectListRequest\publishCommand;

class PublishObjectListRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var publishCommand
     */
    public $publishCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'publishCommand' => 'PublishCommand',
    ];

    public function validate()
    {
        if (null !== $this->publishCommand) {
            $this->publishCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->publishCommand) {
            $res['PublishCommand'] = null !== $this->publishCommand ? $this->publishCommand->toArray($noStream) : $this->publishCommand;
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

        if (isset($map['PublishCommand'])) {
            $model->publishCommand = publishCommand::fromMap($map['PublishCommand']);
        }

        return $model;
    }
}
