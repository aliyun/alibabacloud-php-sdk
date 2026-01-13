<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListVpcInfoByVpcResponseBody\vpcInfos;

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
     * @var vpcInfos[]
     */
    public $vpcInfos;
    protected $_name = [
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpcId' => 'VpcId',
        'vpcInfos' => 'VpcInfos',
    ];

    public function validate()
    {
        if (\is_array($this->vpcInfos)) {
            Model::validateArray($this->vpcInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vpcInfos)) {
                $res['VpcInfos'] = [];
                $n1 = 0;
                foreach ($this->vpcInfos as $item1) {
                    $res['VpcInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['VpcInfos'])) {
                $model->vpcInfos = [];
                $n1 = 0;
                foreach ($map['VpcInfos'] as $item1) {
                    $model->vpcInfos[$n1] = vpcInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
