<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedAssetsResponseBody\assetList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAffectedAssetsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeAffectedAssetsResponseBody extends Model
{
    /**
     * @var assetList[]
     */
    public $assetList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetList' => 'AssetList',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetList) {
            $res['AssetList'] = [];
            if (null !== $this->assetList && \is_array($this->assetList)) {
                $n = 0;
                foreach ($this->assetList as $item) {
                    $res['AssetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAffectedAssetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetList'])) {
            if (!empty($map['AssetList'])) {
                $model->assetList = [];
                $n                = 0;
                foreach ($map['AssetList'] as $item) {
                    $model->assetList[$n++] = null !== $item ? assetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
