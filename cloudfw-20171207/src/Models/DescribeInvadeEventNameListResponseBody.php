<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventNameListResponseBody\eventNameList;

class DescribeInvadeEventNameListResponseBody extends Model
{
    /**
     * @var eventNameList[]
     */
    public $eventNameList;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eventNameList' => 'EventNameList',
        'nameList' => 'NameList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->eventNameList)) {
            Model::validateArray($this->eventNameList);
        }
        if (\is_array($this->nameList)) {
            Model::validateArray($this->nameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventNameList) {
            if (\is_array($this->eventNameList)) {
                $res['EventNameList'] = [];
                $n1 = 0;
                foreach ($this->eventNameList as $item1) {
                    $res['EventNameList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nameList) {
            if (\is_array($this->nameList)) {
                $res['NameList'] = [];
                $n1 = 0;
                foreach ($this->nameList as $item1) {
                    $res['NameList'][$n1] = $item1;
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
        if (isset($map['EventNameList'])) {
            if (!empty($map['EventNameList'])) {
                $model->eventNameList = [];
                $n1 = 0;
                foreach ($map['EventNameList'] as $item1) {
                    $model->eventNameList[$n1] = eventNameList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = [];
                $n1 = 0;
                foreach ($map['NameList'] as $item1) {
                    $model->nameList[$n1] = $item1;
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
