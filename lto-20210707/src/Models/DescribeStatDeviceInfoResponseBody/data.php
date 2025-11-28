<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\DescribeStatDeviceInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Lto\V20210707\Models\DescribeStatDeviceInfoResponseBody\data\bizChainList;

class data extends Model
{
    /**
     * @var bizChainList[]
     */
    public $bizChainList;

    /**
     * @var int
     */
    public $distributableCount;

    /**
     * @var int
     */
    public $totalAuthorizedCount;
    protected $_name = [
        'bizChainList' => 'BizChainList',
        'distributableCount' => 'DistributableCount',
        'totalAuthorizedCount' => 'TotalAuthorizedCount',
    ];

    public function validate()
    {
        if (\is_array($this->bizChainList)) {
            Model::validateArray($this->bizChainList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizChainList) {
            if (\is_array($this->bizChainList)) {
                $res['BizChainList'] = [];
                $n1 = 0;
                foreach ($this->bizChainList as $item1) {
                    $res['BizChainList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->distributableCount) {
            $res['DistributableCount'] = $this->distributableCount;
        }

        if (null !== $this->totalAuthorizedCount) {
            $res['TotalAuthorizedCount'] = $this->totalAuthorizedCount;
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
        if (isset($map['BizChainList'])) {
            if (!empty($map['BizChainList'])) {
                $model->bizChainList = [];
                $n1 = 0;
                foreach ($map['BizChainList'] as $item1) {
                    $model->bizChainList[$n1] = bizChainList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DistributableCount'])) {
            $model->distributableCount = $map['DistributableCount'];
        }

        if (isset($map['TotalAuthorizedCount'])) {
            $model->totalAuthorizedCount = $map['TotalAuthorizedCount'];
        }

        return $model;
    }
}
