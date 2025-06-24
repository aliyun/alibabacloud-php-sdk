<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceEngineListResponseBody\engineList;

class GetLindormV2InstanceEngineListResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var engineList[]
     */
    public $engineList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'engineList' => 'EngineList',
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->engineList)) {
            Model::validateArray($this->engineList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->engineList) {
            if (\is_array($this->engineList)) {
                $res['EngineList'] = [];
                $n1 = 0;
                foreach ($this->engineList as $item1) {
                    $res['EngineList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n1 = 0;
                foreach ($map['EngineList'] as $item1) {
                    $model->engineList[$n1] = engineList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
