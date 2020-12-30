<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsResponseBody\assetList;
use AlibabaCloud\Tea\Model;

class DescribeAssetDetailByUuidsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var assetList[]
     */
    public $assetList;
    protected $_name = [
        'requestId' => 'RequestId',
        'assetList' => 'AssetList',
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
        if (null !== $this->assetList) {
            $res['AssetList'] = [];
            if (null !== $this->assetList && \is_array($this->assetList)) {
                $n = 0;
                foreach ($this->assetList as $item) {
                    $res['AssetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetDetailByUuidsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AssetList'])) {
            if (!empty($map['AssetList'])) {
                $model->assetList = [];
                $n                = 0;
                foreach ($map['AssetList'] as $item) {
                    $model->assetList[$n++] = null !== $item ? assetList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
