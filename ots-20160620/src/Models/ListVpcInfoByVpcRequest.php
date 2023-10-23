<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models;

use AlibabaCloud\SDK\Ots\V20160620\Models\ListVpcInfoByVpcRequest\tagInfo;
use AlibabaCloud\Tea\Model;

class ListVpcInfoByVpcRequest extends Model
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
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var tagInfo[]
     */
    public $tagInfo;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tagInfo'         => 'TagInfo',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tagInfo) {
            $res['TagInfo'] = [];
            if (null !== $this->tagInfo && \is_array($this->tagInfo)) {
                $n = 0;
                foreach ($this->tagInfo as $item) {
                    $res['TagInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpcInfoByVpcRequest
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
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TagInfo'])) {
            if (!empty($map['TagInfo'])) {
                $model->tagInfo = [];
                $n              = 0;
                foreach ($map['TagInfo'] as $item) {
                    $model->tagInfo[$n++] = null !== $item ? tagInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
