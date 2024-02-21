<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeAssetGroupResponseBody\assetGroupList;
use AlibabaCloud\Tea\Model;

class DescribeAssetGroupResponseBody extends Model
{
    /**
     * @description The information about the asset.
     *
     * @var assetGroupList[]
     */
    public $assetGroupList;

    /**
     * @description The request ID.
     *
     * @example 487EC0F7-8D14-504E-914E-3A1BC314B581
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'assetGroupList' => 'AssetGroupList',
        'requestId'      => 'RequestId',
        'total'          => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetGroupList) {
            $res['AssetGroupList'] = [];
            if (null !== $this->assetGroupList && \is_array($this->assetGroupList)) {
                $n = 0;
                foreach ($this->assetGroupList as $item) {
                    $res['AssetGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetGroupList'])) {
            if (!empty($map['AssetGroupList'])) {
                $model->assetGroupList = [];
                $n                     = 0;
                foreach ($map['AssetGroupList'] as $item) {
                    $model->assetGroupList[$n++] = null !== $item ? assetGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
