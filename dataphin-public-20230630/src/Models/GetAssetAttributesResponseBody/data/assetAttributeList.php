<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetAttributesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAssetAttributesResponseBody\data\assetAttributeList\attributeList;

class assetAttributeList extends Model
{
    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var attributeList[]
     */
    public $attributeList;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $lastModifiedTime;
    protected $_name = [
        'assetName' => 'AssetName',
        'assetType' => 'AssetType',
        'attributeList' => 'AttributeList',
        'guid' => 'Guid',
        'lastModifiedTime' => 'LastModifiedTime',
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
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

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

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
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
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

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

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        return $model;
    }
}
