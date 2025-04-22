<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CssInstanceComponent extends Model
{
    /**
     * @var string
     */
    public $componentCode;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $globalKey;

    /**
     * @var CssInstanceProperty[]
     */
    public $instanceProperty;

    /**
     * @var int
     */
    public $moduleAttrStatus;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'componentCode' => 'componentCode',
        'componentName' => 'componentName',
        'globalKey' => 'globalKey',
        'instanceProperty' => 'instanceProperty',
        'moduleAttrStatus' => 'moduleAttrStatus',
        'tag' => 'tag',
    ];

    public function validate()
    {
        if (\is_array($this->instanceProperty)) {
            Model::validateArray($this->instanceProperty);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentCode) {
            $res['componentCode'] = $this->componentCode;
        }

        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }

        if (null !== $this->globalKey) {
            $res['globalKey'] = $this->globalKey;
        }

        if (null !== $this->instanceProperty) {
            if (\is_array($this->instanceProperty)) {
                $res['instanceProperty'] = [];
                $n1 = 0;
                foreach ($this->instanceProperty as $item1) {
                    $res['instanceProperty'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->moduleAttrStatus) {
            $res['moduleAttrStatus'] = $this->moduleAttrStatus;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['componentCode'])) {
            $model->componentCode = $map['componentCode'];
        }

        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }

        if (isset($map['globalKey'])) {
            $model->globalKey = $map['globalKey'];
        }

        if (isset($map['instanceProperty'])) {
            if (!empty($map['instanceProperty'])) {
                $model->instanceProperty = [];
                $n1 = 0;
                foreach ($map['instanceProperty'] as $item1) {
                    $model->instanceProperty[$n1++] = CssInstanceProperty::fromMap($item1);
                }
            }
        }

        if (isset($map['moduleAttrStatus'])) {
            $model->moduleAttrStatus = $map['moduleAttrStatus'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}
