<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentAssetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentAssetsResponseBody\componentAssets\componentAssetValues;

class componentAssets extends Model
{
    /**
     * @var string
     */
    public $componentAssetName;

    /**
     * @var string
     */
    public $componentAssetUuid;

    /**
     * @var componentAssetValues[]
     */
    public $componentAssetValues;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'componentAssetName' => 'ComponentAssetName',
        'componentAssetUuid' => 'ComponentAssetUuid',
        'componentAssetValues' => 'ComponentAssetValues',
        'componentName' => 'ComponentName',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->componentAssetValues)) {
            Model::validateArray($this->componentAssetValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentAssetName) {
            $res['ComponentAssetName'] = $this->componentAssetName;
        }

        if (null !== $this->componentAssetUuid) {
            $res['ComponentAssetUuid'] = $this->componentAssetUuid;
        }

        if (null !== $this->componentAssetValues) {
            if (\is_array($this->componentAssetValues)) {
                $res['ComponentAssetValues'] = [];
                $n1 = 0;
                foreach ($this->componentAssetValues as $item1) {
                    $res['ComponentAssetValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ComponentAssetName'])) {
            $model->componentAssetName = $map['ComponentAssetName'];
        }

        if (isset($map['ComponentAssetUuid'])) {
            $model->componentAssetUuid = $map['ComponentAssetUuid'];
        }

        if (isset($map['ComponentAssetValues'])) {
            if (!empty($map['ComponentAssetValues'])) {
                $model->componentAssetValues = [];
                $n1 = 0;
                foreach ($map['ComponentAssetValues'] as $item1) {
                    $model->componentAssetValues[$n1] = componentAssetValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
