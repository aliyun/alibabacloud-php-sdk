<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models;

use AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByVpcResponseBody\vpcInfos;
use AlibabaCloud\Tea\Model;

class ListVpcInfoByVpcResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNum;

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
     * @var string
     */
    public $vpcId;

    /**
     * @var vpcInfos
     */
    public $vpcInfos;
    protected $_name = [
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpcId'      => 'VpcId',
        'vpcInfos'   => 'VpcInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcInfos) {
            $res['VpcInfos'] = null !== $this->vpcInfos ? $this->vpcInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcInfoByVpcResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcInfos'])) {
            $model->vpcInfos = vpcInfos::fromMap($map['VpcInfos']);
        }

        return $model;
    }
}
