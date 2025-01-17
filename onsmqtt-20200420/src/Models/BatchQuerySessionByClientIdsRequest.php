<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Dara\Model;

class BatchQuerySessionByClientIdsRequest extends Model
{
    /**
     * @var string[]
     */
    public $clientIdList;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientIdList' => 'ClientIdList',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->clientIdList)) {
            Model::validateArray($this->clientIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIdList) {
            if (\is_array($this->clientIdList)) {
                $res['ClientIdList'] = [];
                $n1                  = 0;
                foreach ($this->clientIdList as $item1) {
                    $res['ClientIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ClientIdList'])) {
            if (!empty($map['ClientIdList'])) {
                $model->clientIdList = [];
                $n1                  = 0;
                foreach ($map['ClientIdList'] as $item1) {
                    $model->clientIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
