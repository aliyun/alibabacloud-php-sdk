<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeSuspiciousUUIDConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $UUIDList;
    protected $_name = [
        'count' => 'Count',
        'requestId' => 'RequestId',
        'UUIDList' => 'UUIDList',
    ];

    public function validate()
    {
        if (\is_array($this->UUIDList)) {
            Model::validateArray($this->UUIDList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->UUIDList) {
            if (\is_array($this->UUIDList)) {
                $res['UUIDList'] = [];
                $n1 = 0;
                foreach ($this->UUIDList as $item1) {
                    $res['UUIDList'][$n1] = $item1;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UUIDList'])) {
            if (!empty($map['UUIDList'])) {
                $model->UUIDList = [];
                $n1 = 0;
                foreach ($map['UUIDList'] as $item1) {
                    $model->UUIDList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
