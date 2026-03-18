<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeAssetGroupResponseBody\assetGroupList;

class DescribeAssetGroupResponseBody extends Model
{
    /**
     * @var assetGroupList[]
     */
    public $assetGroupList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'assetGroupList' => 'AssetGroupList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->assetGroupList)) {
            Model::validateArray($this->assetGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetGroupList) {
            if (\is_array($this->assetGroupList)) {
                $res['AssetGroupList'] = [];
                $n1 = 0;
                foreach ($this->assetGroupList as $item1) {
                    $res['AssetGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetGroupList'])) {
            if (!empty($map['AssetGroupList'])) {
                $model->assetGroupList = [];
                $n1 = 0;
                foreach ($map['AssetGroupList'] as $item1) {
                    $model->assetGroupList[$n1] = assetGroupList::fromMap($item1);
                    ++$n1;
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
