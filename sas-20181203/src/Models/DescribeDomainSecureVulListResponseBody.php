<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureVulListResponseBody\vulList;

class DescribeDomainSecureVulListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var vulList[]
     */
    public $vulList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'vulList'    => 'VulList',
    ];

    public function validate()
    {
        if (\is_array($this->vulList)) {
            Model::validateArray($this->vulList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vulList) {
            if (\is_array($this->vulList)) {
                $res['VulList'] = [];
                $n1             = 0;
                foreach ($this->vulList as $item1) {
                    $res['VulList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VulList'])) {
            if (!empty($map['VulList'])) {
                $model->vulList = [];
                $n1             = 0;
                foreach ($map['VulList'] as $item1) {
                    $model->vulList[$n1++] = vulList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
