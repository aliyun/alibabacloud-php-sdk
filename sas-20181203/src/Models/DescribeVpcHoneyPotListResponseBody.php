<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotListResponseBody\vpcHoneyPotDTOList;
use AlibabaCloud\Tea\Model;

class DescribeVpcHoneyPotListResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request.
     *
     * @example 4FEC7F58-FCDA-415F-AE25-CD8BC0931DF2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the honeypots.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
