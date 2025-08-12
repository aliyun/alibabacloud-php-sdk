<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeMixStreamListResponseBody\mixStreamList;

class DescribeMixStreamListResponseBody extends Model
{
    /**
     * @var mixStreamList[]
     */
    public $mixStreamList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'mixStreamList' => 'MixStreamList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->mixStreamList)) {
            Model::validateArray($this->mixStreamList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mixStreamList) {
            if (\is_array($this->mixStreamList)) {
                $res['MixStreamList'] = [];
                $n1 = 0;
                foreach ($this->mixStreamList as $item1) {
                    $res['MixStreamList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['MixStreamList'])) {
            if (!empty($map['MixStreamList'])) {
                $model->mixStreamList = [];
                $n1 = 0;
                foreach ($map['MixStreamList'] as $item1) {
                    $model->mixStreamList[$n1] = mixStreamList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
