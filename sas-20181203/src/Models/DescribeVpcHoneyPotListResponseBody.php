<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList;

class DescribeVpcHoneyPotListResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var vpcHoneyPotDTOList[]
     */
    public $vpcHoneyPotDTOList;
    protected $_name = [
        'pageInfo'           => 'PageInfo',
        'requestId'          => 'RequestId',
        'vpcHoneyPotDTOList' => 'VpcHoneyPotDTOList',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->vpcHoneyPotDTOList)) {
            Model::validateArray($this->vpcHoneyPotDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vpcHoneyPotDTOList) {
            if (\is_array($this->vpcHoneyPotDTOList)) {
                $res['VpcHoneyPotDTOList'] = [];
                $n1                        = 0;
                foreach ($this->vpcHoneyPotDTOList as $item1) {
                    $res['VpcHoneyPotDTOList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VpcHoneyPotDTOList'])) {
            if (!empty($map['VpcHoneyPotDTOList'])) {
                $model->vpcHoneyPotDTOList = [];
                $n1                        = 0;
                foreach ($map['VpcHoneyPotDTOList'] as $item1) {
                    $model->vpcHoneyPotDTOList[$n1++] = vpcHoneyPotDTOList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
