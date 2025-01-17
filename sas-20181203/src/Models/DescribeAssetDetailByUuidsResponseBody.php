<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetDetailByUuidsResponseBody\assetList;

class DescribeAssetDetailByUuidsResponseBody extends Model
{
    /**
     * @var assetList[]
     */
    public $assetList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'assetList' => 'AssetList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->assetList)) {
            Model::validateArray($this->assetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetList) {
            if (\is_array($this->assetList)) {
                $res['AssetList'] = [];
                $n1               = 0;
                foreach ($this->assetList as $item1) {
                    $res['AssetList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AssetList'])) {
            if (!empty($map['AssetList'])) {
                $model->assetList = [];
                $n1               = 0;
                foreach ($map['AssetList'] as $item1) {
                    $model->assetList[$n1++] = assetList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
