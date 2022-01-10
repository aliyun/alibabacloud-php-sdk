<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemActivityResponseBody\activities;

use AlibabaCloud\Tea\Model;

class property extends Model
{
    /**
     * @description 属性的展示名
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 资源id
     *
     * @var string
     */
    public $propertyIdentifier;

    /**
     * @description 属性key
     *
     * @var string
     */
    public $propertyName;

    /**
     * @description 类型
     *
     * @var string
     */
    public $propertyType;
    protected $_name = [
        'displayName'        => 'displayName',
        'propertyIdentifier' => 'propertyIdentifier',
        'propertyName'       => 'propertyName',
        'propertyType'       => 'propertyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->propertyIdentifier) {
            $res['propertyIdentifier'] = $this->propertyIdentifier;
        }
        if (null !== $this->propertyName) {
            $res['propertyName'] = $this->propertyName;
        }
        if (null !== $this->propertyType) {
            $res['propertyType'] = $this->propertyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return property
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['propertyIdentifier'])) {
            $model->propertyIdentifier = $map['propertyIdentifier'];
        }
        if (isset($map['propertyName'])) {
            $model->propertyName = $map['propertyName'];
        }
        if (isset($map['propertyType'])) {
            $model->propertyType = $map['propertyType'];
        }

        return $model;
    }
}
