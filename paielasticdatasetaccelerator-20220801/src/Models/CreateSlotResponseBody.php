<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class CreateSlotResponseBody extends Model
{
    /**
     * @var string
     */
    public $endpointIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slotId;
    protected $_name = [
        'endpointIds' => 'EndpointIds',
        'requestId' => 'RequestId',
        'slotId' => 'SlotId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointIds) {
            $res['EndpointIds'] = $this->endpointIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slotId) {
            $res['SlotId'] = $this->slotId;
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
        if (isset($map['EndpointIds'])) {
            $model->endpointIds = $map['EndpointIds'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlotId'])) {
            $model->slotId = $map['SlotId'];
        }

        return $model;
    }
}
