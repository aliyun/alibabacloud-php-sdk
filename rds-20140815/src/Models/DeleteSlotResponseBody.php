<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DeleteSlotResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2875D608-A228-53D7-B8C9-35F13EDCF36D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the replication slot.
     *
     * @example slot_test01
     *
     * @var string
     */
    public $slotName;
    protected $_name = [
        'requestId' => 'RequestId',
        'slotName'  => 'SlotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slotName) {
            $res['SlotName'] = $this->slotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSlotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlotName'])) {
            $model->slotName = $map['SlotName'];
        }

        return $model;
    }
}
