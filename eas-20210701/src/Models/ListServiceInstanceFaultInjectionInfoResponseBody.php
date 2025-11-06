<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListServiceInstanceFaultInjectionInfoResponseBody\faultInfoList;

class ListServiceInstanceFaultInjectionInfoResponseBody extends Model
{
    /**
     * @var faultInfoList[]
     */
    public $faultInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'faultInfoList' => 'FaultInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->faultInfoList)) {
            Model::validateArray($this->faultInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faultInfoList) {
            if (\is_array($this->faultInfoList)) {
                $res['FaultInfoList'] = [];
                $n1 = 0;
                foreach ($this->faultInfoList as $item1) {
                    $res['FaultInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['FaultInfoList'])) {
            if (!empty($map['FaultInfoList'])) {
                $model->faultInfoList = [];
                $n1 = 0;
                foreach ($map['FaultInfoList'] as $item1) {
                    $model->faultInfoList[$n1] = faultInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
