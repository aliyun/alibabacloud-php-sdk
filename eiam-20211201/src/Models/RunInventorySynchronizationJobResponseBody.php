<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class RunInventorySynchronizationJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $inventorySynchronizationJobId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'inventorySynchronizationJobId' => 'InventorySynchronizationJobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inventorySynchronizationJobId) {
            $res['InventorySynchronizationJobId'] = $this->inventorySynchronizationJobId;
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
        if (isset($map['InventorySynchronizationJobId'])) {
            $model->inventorySynchronizationJobId = $map['InventorySynchronizationJobId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
