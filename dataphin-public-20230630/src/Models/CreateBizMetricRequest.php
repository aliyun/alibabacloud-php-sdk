<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateBizMetricRequest\createBizMetricCommand;

class CreateBizMetricRequest extends Model
{
    /**
     * @var createBizMetricCommand
     */
    public $createBizMetricCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createBizMetricCommand' => 'CreateBizMetricCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->createBizMetricCommand) {
            $this->createBizMetricCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createBizMetricCommand) {
            $res['CreateBizMetricCommand'] = null !== $this->createBizMetricCommand ? $this->createBizMetricCommand->toArray($noStream) : $this->createBizMetricCommand;
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
        if (isset($map['CreateBizMetricCommand'])) {
            $model->createBizMetricCommand = createBizMetricCommand::fromMap($map['CreateBizMetricCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
