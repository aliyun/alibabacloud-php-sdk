<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponseBody\components\componentActions;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\ListComponentsResponseBody\components\componentAssetConfigs;

class components extends Model
{
    /**
     * @var componentActions[]
     */
    public $componentActions;

    /**
     * @var string
     */
    public $componentAlias;

    /**
     * @var componentAssetConfigs[]
     */
    public $componentAssetConfigs;

    /**
     * @var string
     */
    public $componentDescription;

    /**
     * @var string
     */
    public $componentExtension;

    /**
     * @var string
     */
    public $componentLogo;

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
        'componentActions' => 'ComponentActions',
        'componentAlias' => 'ComponentAlias',
        'componentAssetConfigs' => 'ComponentAssetConfigs',
        'componentDescription' => 'ComponentDescription',
        'componentExtension' => 'ComponentExtension',
        'componentLogo' => 'ComponentLogo',
        'componentName' => 'ComponentName',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->componentActions)) {
            Model::validateArray($this->componentActions);
        }
        if (\is_array($this->componentAssetConfigs)) {
            Model::validateArray($this->componentAssetConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentActions) {
            if (\is_array($this->componentActions)) {
                $res['ComponentActions'] = [];
                $n1 = 0;
                foreach ($this->componentActions as $item1) {
                    $res['ComponentActions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->componentAlias) {
            $res['ComponentAlias'] = $this->componentAlias;
        }

        if (null !== $this->componentAssetConfigs) {
            if (\is_array($this->componentAssetConfigs)) {
                $res['ComponentAssetConfigs'] = [];
                $n1 = 0;
                foreach ($this->componentAssetConfigs as $item1) {
                    $res['ComponentAssetConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->componentDescription) {
            $res['ComponentDescription'] = $this->componentDescription;
        }

        if (null !== $this->componentExtension) {
            $res['ComponentExtension'] = $this->componentExtension;
        }

        if (null !== $this->componentLogo) {
            $res['ComponentLogo'] = $this->componentLogo;
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
        if (isset($map['ComponentActions'])) {
            if (!empty($map['ComponentActions'])) {
                $model->componentActions = [];
                $n1 = 0;
                foreach ($map['ComponentActions'] as $item1) {
                    $model->componentActions[$n1] = componentActions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ComponentAlias'])) {
            $model->componentAlias = $map['ComponentAlias'];
        }

        if (isset($map['ComponentAssetConfigs'])) {
            if (!empty($map['ComponentAssetConfigs'])) {
                $model->componentAssetConfigs = [];
                $n1 = 0;
                foreach ($map['ComponentAssetConfigs'] as $item1) {
                    $model->componentAssetConfigs[$n1] = componentAssetConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ComponentDescription'])) {
            $model->componentDescription = $map['ComponentDescription'];
        }

        if (isset($map['ComponentExtension'])) {
            $model->componentExtension = $map['ComponentExtension'];
        }

        if (isset($map['ComponentLogo'])) {
            $model->componentLogo = $map['ComponentLogo'];
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
