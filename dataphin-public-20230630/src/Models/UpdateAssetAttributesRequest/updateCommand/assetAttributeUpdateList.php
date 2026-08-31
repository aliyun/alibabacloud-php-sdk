<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateAssetAttributesRequest\updateCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateAssetAttributesRequest\updateCommand\assetAttributeUpdateList\attributeList;

class assetAttributeUpdateList extends Model
{
    /**
     * @var attributeList[]
     */
    public $attributeList;

    /**
     * @var string
     */
    public $guid;
    protected $_name = [
        'attributeList' => 'AttributeList',
        'guid' => 'Guid',
    ];

    public function validate()
    {
        if (\is_array($this->attributeList)) {
            Model::validateArray($this->attributeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeList) {
            if (\is_array($this->attributeList)) {
                $res['AttributeList'] = [];
                $n1 = 0;
                foreach ($this->attributeList as $item1) {
                    $res['AttributeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
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
        if (isset($map['AttributeList'])) {
            if (!empty($map['AttributeList'])) {
                $model->attributeList = [];
                $n1 = 0;
                foreach ($map['AttributeList'] as $item1) {
                    $model->attributeList[$n1] = attributeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        return $model;
    }
}
