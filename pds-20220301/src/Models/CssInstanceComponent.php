<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

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
        'componentCode'    => 'componentCode',
        'componentName'    => 'componentName',
        'globalKey'        => 'globalKey',
        'instanceProperty' => 'instanceProperty',
        'moduleAttrStatus' => 'moduleAttrStatus',
        'tag'              => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['instanceProperty'] = [];
            if (null !== $this->instanceProperty && \is_array($this->instanceProperty)) {
                $n = 0;
                foreach ($this->instanceProperty as $item) {
                    $res['instanceProperty'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CssInstanceComponent
     */
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
                $n                       = 0;
                foreach ($map['instanceProperty'] as $item) {
                    $model->instanceProperty[$n++] = null !== $item ? CssInstanceProperty::fromMap($item) : $item;
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
