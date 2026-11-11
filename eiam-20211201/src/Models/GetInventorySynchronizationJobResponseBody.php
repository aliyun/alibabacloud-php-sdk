<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInventorySynchronizationJobResponseBody\inventorySynchronizationJob;

class GetInventorySynchronizationJobResponseBody extends Model
{
    /**
     * @var inventorySynchronizationJob
     */
    public $inventorySynchronizationJob;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inventorySynchronizationJob' => 'InventorySynchronizationJob',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->inventorySynchronizationJob) {
            $this->inventorySynchronizationJob->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inventorySynchronizationJob) {
            $res['InventorySynchronizationJob'] = null !== $this->inventorySynchronizationJob ? $this->inventorySynchronizationJob->toArray($noStream) : $this->inventorySynchronizationJob;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InventorySynchronizationJob'])) {
            $model->inventorySynchronizationJob = inventorySynchronizationJob::fromMap($map['InventorySynchronizationJob']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
