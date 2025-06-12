<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2StreamEngineInfoResponseBody\resourceGroupList;

class GetLindormV2StreamEngineInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceGroupList[]
     */
    public $resourceGroupList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
        'resourceGroupList' => 'ResourceGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroupList)) {
            Model::validateArray($this->resourceGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupList) {
            if (\is_array($this->resourceGroupList)) {
                $res['ResourceGroupList'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupList as $item1) {
                    $res['ResourceGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupList'])) {
            if (!empty($map['ResourceGroupList'])) {
                $model->resourceGroupList = [];
                $n1 = 0;
                foreach ($map['ResourceGroupList'] as $item1) {
                    $model->resourceGroupList[$n1++] = resourceGroupList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
