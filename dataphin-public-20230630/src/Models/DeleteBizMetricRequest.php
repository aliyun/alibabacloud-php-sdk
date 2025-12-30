<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteBizMetricRequest\deleteBizMetricCommand;

class DeleteBizMetricRequest extends Model
{
    /**
     * @var deleteBizMetricCommand
     */
    public $deleteBizMetricCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteBizMetricCommand' => 'DeleteBizMetricCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->deleteBizMetricCommand) {
            $this->deleteBizMetricCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteBizMetricCommand) {
            $res['DeleteBizMetricCommand'] = null !== $this->deleteBizMetricCommand ? $this->deleteBizMetricCommand->toArray($noStream) : $this->deleteBizMetricCommand;
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
        if (isset($map['DeleteBizMetricCommand'])) {
            $model->deleteBizMetricCommand = deleteBizMetricCommand::fromMap($map['DeleteBizMetricCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
