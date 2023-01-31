<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteOutboundCallNumberRequest extends Model
{
    /**
     * @example 33014787-cc13-49d3-ab2f-a98aa8f15fbb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ffa367e0-58f3-43b6-9615-c63db99c5add
     *
     * @var string
     */
    public $outboundCallNumberId;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'outboundCallNumberId' => 'OutboundCallNumberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outboundCallNumberId) {
            $res['OutboundCallNumberId'] = $this->outboundCallNumberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteOutboundCallNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundCallNumberId'])) {
            $model->outboundCallNumberId = $map['OutboundCallNumberId'];
        }

        return $model;
    }
}
