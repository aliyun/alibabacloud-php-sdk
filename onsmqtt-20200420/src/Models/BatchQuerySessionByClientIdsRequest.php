<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class BatchQuerySessionByClientIdsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $clientIdList;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'clientIdList' => 'ClientIdList',
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
        if (null !== $this->clientIdList) {
            $res['ClientIdList'] = $this->clientIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchQuerySessionByClientIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ClientIdList'])) {
            if (!empty($map['ClientIdList'])) {
                $model->clientIdList = $map['ClientIdList'];
            }
        }

        return $model;
    }
}
