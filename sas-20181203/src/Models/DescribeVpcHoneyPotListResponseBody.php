<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList;
use AlibabaCloud\Tea\Model;

class DescribeVpcHoneyPotListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var vpcHoneyPotDTOList[]
     */
    public $vpcHoneyPotDTOList;
    protected $_name = [
        'requestId'          => 'RequestId',
        'pageInfo'           => 'PageInfo',
        'vpcHoneyPotDTOList' => 'VpcHoneyPotDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->vpcHoneyPotDTOList) {
            $res['VpcHoneyPotDTOList'] = [];
            if (null !== $this->vpcHoneyPotDTOList && \is_array($this->vpcHoneyPotDTOList)) {
                $n = 0;
                foreach ($this->vpcHoneyPotDTOList as $item) {
                    $res['VpcHoneyPotDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcHoneyPotListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['VpcHoneyPotDTOList'])) {
            if (!empty($map['VpcHoneyPotDTOList'])) {
                $model->vpcHoneyPotDTOList = [];
                $n                         = 0;
                foreach ($map['VpcHoneyPotDTOList'] as $item) {
                    $model->vpcHoneyPotDTOList[$n++] = null !== $item ? vpcHoneyPotDTOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
