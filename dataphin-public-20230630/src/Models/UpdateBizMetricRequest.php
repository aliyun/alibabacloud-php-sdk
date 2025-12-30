<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBizMetricRequest\updateBizMetricCommand;

class UpdateBizMetricRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var updateBizMetricCommand
     */
    public $updateBizMetricCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateBizMetricCommand' => 'UpdateBizMetricCommand',
    ];

    public function validate()
    {
        if (null !== $this->updateBizMetricCommand) {
            $this->updateBizMetricCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->updateBizMetricCommand) {
            $res['UpdateBizMetricCommand'] = null !== $this->updateBizMetricCommand ? $this->updateBizMetricCommand->toArray($noStream) : $this->updateBizMetricCommand;
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

        if (isset($map['UpdateBizMetricCommand'])) {
            $model->updateBizMetricCommand = updateBizMetricCommand::fromMap($map['UpdateBizMetricCommand']);
        }

        return $model;
    }
}
