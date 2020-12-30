<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ListPhoneNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $outboundOnly;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'outboundOnly' => 'OutboundOnly',
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
        if (null !== $this->outboundOnly) {
            $res['OutboundOnly'] = $this->outboundOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPhoneNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundOnly'])) {
            $model->outboundOnly = $map['OutboundOnly'];
        }

        return $model;
    }
}
