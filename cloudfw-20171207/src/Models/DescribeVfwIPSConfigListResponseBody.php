<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVfwIPSConfigListResponseBody\vfwIpsSwitchConfigList;

class DescribeVfwIPSConfigListResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var vfwIpsSwitchConfigList[]
     */
    public $vfwIpsSwitchConfigList;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vfwIpsSwitchConfigList' => 'VfwIpsSwitchConfigList',
    ];

    public function validate()
    {
        if (\is_array($this->vfwIpsSwitchConfigList)) {
            Model::validateArray($this->vfwIpsSwitchConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vfwIpsSwitchConfigList) {
            if (\is_array($this->vfwIpsSwitchConfigList)) {
                $res['VfwIpsSwitchConfigList'] = [];
                $n1 = 0;
                foreach ($this->vfwIpsSwitchConfigList as $item1) {
                    $res['VfwIpsSwitchConfigList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VfwIpsSwitchConfigList'])) {
            if (!empty($map['VfwIpsSwitchConfigList'])) {
                $model->vfwIpsSwitchConfigList = [];
                $n1 = 0;
                foreach ($map['VfwIpsSwitchConfigList'] as $item1) {
                    $model->vfwIpsSwitchConfigList[$n1] = vfwIpsSwitchConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
