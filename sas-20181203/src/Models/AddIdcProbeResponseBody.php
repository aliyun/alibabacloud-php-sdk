<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddIdcProbeResponseBody\addIdcProbeFailedList;

class AddIdcProbeResponseBody extends Model
{
    /**
     * @var addIdcProbeFailedList[]
     */
    public $addIdcProbeFailedList;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addIdcProbeFailedList' => 'AddIdcProbeFailedList',
        'count' => 'Count',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->addIdcProbeFailedList)) {
            Model::validateArray($this->addIdcProbeFailedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addIdcProbeFailedList) {
            if (\is_array($this->addIdcProbeFailedList)) {
                $res['AddIdcProbeFailedList'] = [];
                $n1 = 0;
                foreach ($this->addIdcProbeFailedList as $item1) {
                    $res['AddIdcProbeFailedList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['AddIdcProbeFailedList'])) {
            if (!empty($map['AddIdcProbeFailedList'])) {
                $model->addIdcProbeFailedList = [];
                $n1 = 0;
                foreach ($map['AddIdcProbeFailedList'] as $item1) {
                    $model->addIdcProbeFailedList[$n1] = addIdcProbeFailedList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
