<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusResponseBody\instanceStatusList;

class GetCAInstanceStatusResponseBody extends Model
{
    /**
     * @var instanceStatusList[]
     */
    public $instanceStatusList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceStatusList' => 'InstanceStatusList',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceStatusList)) {
            Model::validateArray($this->instanceStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceStatusList) {
            if (\is_array($this->instanceStatusList)) {
                $res['InstanceStatusList'] = [];
                $n1                        = 0;
                foreach ($this->instanceStatusList as $item1) {
                    $res['InstanceStatusList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['InstanceStatusList'])) {
            if (!empty($map['InstanceStatusList'])) {
                $model->instanceStatusList = [];
                $n1                        = 0;
                foreach ($map['InstanceStatusList'] as $item1) {
                    $model->instanceStatusList[$n1++] = instanceStatusList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
