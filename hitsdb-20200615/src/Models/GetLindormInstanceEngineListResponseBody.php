<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponseBody\engineList;
use AlibabaCloud\Tea\Model;

class GetLindormInstanceEngineListResponseBody extends Model
{
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
        'engineList' => 'EngineList',
        'instanceId' => 'InstanceId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineList) {
            $res['EngineList'] = [];
            if (null !== $this->engineList && \is_array($this->engineList)) {
                $n = 0;
                foreach ($this->engineList as $item) {
                    $res['EngineList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetLindormInstanceEngineListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n                 = 0;
                foreach ($map['EngineList'] as $item) {
                    $model->engineList[$n++] = null !== $item ? engineList::fromMap($item) : $item;
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
