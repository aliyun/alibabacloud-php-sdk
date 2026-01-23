<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetQualityWatchTaskRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var int
     */
    public $watchTaskId;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'watchTaskId' => 'WatchTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->watchTaskId) {
            $res['WatchTaskId'] = $this->watchTaskId;
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

        if (isset($map['WatchTaskId'])) {
            $model->watchTaskId = $map['WatchTaskId'];
        }

        return $model;
    }
}
