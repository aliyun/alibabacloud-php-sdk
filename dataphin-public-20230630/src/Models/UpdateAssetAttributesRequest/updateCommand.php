<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateAssetAttributesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateAssetAttributesRequest\updateCommand\assetAttributeUpdateList;

class updateCommand extends Model
{
    /**
     * @var assetAttributeUpdateList[]
     */
    public $assetAttributeUpdateList;
    protected $_name = [
        'assetAttributeUpdateList' => 'AssetAttributeUpdateList',
    ];

    public function validate()
    {
        if (\is_array($this->assetAttributeUpdateList)) {
            Model::validateArray($this->assetAttributeUpdateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetAttributeUpdateList) {
            if (\is_array($this->assetAttributeUpdateList)) {
                $res['AssetAttributeUpdateList'] = [];
                $n1 = 0;
                foreach ($this->assetAttributeUpdateList as $item1) {
                    $res['AssetAttributeUpdateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssetAttributeUpdateList'])) {
            if (!empty($map['AssetAttributeUpdateList'])) {
                $model->assetAttributeUpdateList = [];
                $n1 = 0;
                foreach ($map['AssetAttributeUpdateList'] as $item1) {
                    $model->assetAttributeUpdateList[$n1] = assetAttributeUpdateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
