<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoResponseBody\schedInfo;

class GetSchedulerInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var schedInfo[]
     */
    public $schedInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'schedInfo' => 'SchedInfo',
    ];

    public function validate()
    {
        if (\is_array($this->schedInfo)) {
            Model::validateArray($this->schedInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->schedInfo) {
            if (\is_array($this->schedInfo)) {
                $res['SchedInfo'] = [];
                $n1 = 0;
                foreach ($this->schedInfo as $item1) {
                    $res['SchedInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SchedInfo'])) {
            if (!empty($map['SchedInfo'])) {
                $model->schedInfo = [];
                $n1 = 0;
                foreach ($map['SchedInfo'] as $item1) {
                    $model->schedInfo[$n1++] = schedInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
