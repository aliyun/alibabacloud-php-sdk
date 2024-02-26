<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class CreateSlotResponseBody extends Model
{
    /**
     * @example end-5zk866779me51jgu3w,end-5zk866779me51jgu3w
     *
     * @var string
     */
    public $endpointIds;

    /**
     * @example A731A84D-55C9-44F7-99BB-E1CF0CF19197
     *
     * @var string
     */
    public $requestId;

    /**
     * @example slot-5zk866779me51jgu3w
     *
     * @var string
     */
    public $slotId;
    protected $_name = [
        'endpointIds' => 'EndpointIds',
        'requestId'   => 'RequestId',
        'slotId'      => 'SlotId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateSlotResponseBody
     */
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
