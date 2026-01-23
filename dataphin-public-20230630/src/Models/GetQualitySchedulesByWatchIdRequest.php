<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;

class GetQualitySchedulesByWatchIdRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'watchId' => 'WatchId',
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

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
