<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeThreatIntelligenceSwitchResponseBody\categoryList;

class DescribeThreatIntelligenceSwitchResponseBody extends Model
{
    /**
     * @var categoryList[]
     */
    public $categoryList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'categoryList' => 'CategoryList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->categoryList)) {
            Model::validateArray($this->categoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryList) {
            if (\is_array($this->categoryList)) {
                $res['CategoryList'] = [];
                $n1 = 0;
                foreach ($this->categoryList as $item1) {
                    $res['CategoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CategoryList'])) {
            if (!empty($map['CategoryList'])) {
                $model->categoryList = [];
                $n1 = 0;
                foreach ($map['CategoryList'] as $item1) {
                    $model->categoryList[$n1] = categoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
