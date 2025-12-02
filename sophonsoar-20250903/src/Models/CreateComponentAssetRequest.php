<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20250903\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20250903\Models\CreateComponentAssetRequest\componentAssetValues;

class CreateComponentAssetRequest extends Model
{
    /**
     * @var string
     */
    public $componentAssetName;

    /**
     * @var componentAssetValues[]
     */
    public $componentAssetValues;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'componentAssetName' => 'ComponentAssetName',
        'componentAssetValues' => 'ComponentAssetValues',
        'componentName' => 'ComponentName',
        'lang' => 'Lang',
        'roleFor' => 'RoleFor',
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
