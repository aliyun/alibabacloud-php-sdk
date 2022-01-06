<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryMessageInfoRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $uniMsgId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'uniMsgId'      => 'UniMsgId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->uniMsgId) {
            $res['UniMsgId'] = $this->uniMsgId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMessageInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['UniMsgId'])) {
            $model->uniMsgId = $map['UniMsgId'];
        }

        return $model;
    }
}
