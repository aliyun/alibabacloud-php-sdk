<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetAttributesResponseBody\data\assetAttributeList;

class data extends Model
{
    /**
     * @var assetAttributeList[]
     */
    public $assetAttributeList;
    protected $_name = [
        'assetAttributeList' => 'AssetAttributeList',
    ];

    public function validate()
    {
        if (\is_array($this->assetAttributeList)) {
            Model::validateArray($this->assetAttributeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetAttributeList) {
            if (\is_array($this->assetAttributeList)) {
                $res['AssetAttributeList'] = [];
                $n1 = 0;
                foreach ($this->assetAttributeList as $item1) {
                    $res['AssetAttributeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssetAttributeList'])) {
            if (!empty($map['AssetAttributeList'])) {
                $model->assetAttributeList = [];
                $n1 = 0;
                foreach ($map['AssetAttributeList'] as $item1) {
                    $model->assetAttributeList[$n1] = assetAttributeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
