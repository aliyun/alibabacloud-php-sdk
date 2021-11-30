<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusResponseBody\instanceStatusList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceStatusList) {
            $res['InstanceStatusList'] = [];
            if (null !== $this->instanceStatusList && \is_array($this->instanceStatusList)) {
                $n = 0;
                foreach ($this->instanceStatusList as $item) {
                    $res['InstanceStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCAInstanceStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceStatusList'])) {
            if (!empty($map['InstanceStatusList'])) {
                $model->instanceStatusList = [];
                $n                         = 0;
                foreach ($map['InstanceStatusList'] as $item) {
                    $model->instanceStatusList[$n++] = null !== $item ? instanceStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
