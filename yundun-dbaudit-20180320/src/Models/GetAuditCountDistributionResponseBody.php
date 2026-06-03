<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAuditCountDistributionResponseBody\timeList;

class GetAuditCountDistributionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var timeList[]
     */
    public $timeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'timeList' => 'TimeList',
    ];

    public function validate()
    {
        if (\is_array($this->timeList)) {
            Model::validateArray($this->timeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->timeList) {
            if (\is_array($this->timeList)) {
                $res['TimeList'] = [];
                $n1 = 0;
                foreach ($this->timeList as $item1) {
                    $res['TimeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TimeList'])) {
            if (!empty($map['TimeList'])) {
                $model->timeList = [];
                $n1 = 0;
                foreach ($map['TimeList'] as $item1) {
                    $model->timeList[$n1] = timeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
