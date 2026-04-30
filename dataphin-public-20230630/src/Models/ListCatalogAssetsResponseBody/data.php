<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListCatalogAssetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListCatalogAssetsResponseBody\data\assetList;

class data extends Model
{
    /**
     * @var assetList[]
     */
    public $assetList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'assetList' => 'AssetList',
        'totalCount' => 'TotalCount',
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
                $n1 = 0;
                foreach ($this->assetList as $item1) {
                    $res['AssetList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
                $n1 = 0;
                foreach ($map['AssetList'] as $item1) {
                    $model->assetList[$n1] = assetList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
