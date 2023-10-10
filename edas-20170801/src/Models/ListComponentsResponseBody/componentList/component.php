<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListComponentsResponseBody\componentList;

use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @description The ID of the component.
     *
     * @example 1
     *
     * @var string
     */
    public $componentId;

    /**
     * @description The key of the component.
     *
     * @example JDK 7
     *
     * @var string
     */
    public $componentKey;

    /**
     * @description The description of the component.
     *
     * @example JDK 7
     *
     * @var string
     */
    public $desc;

    /**
     * @description Indicates whether the component has expired. Valid values:
     *
     *   false: The component has not expired.
     *   true: The component has expired.
     *
     * @example false
     *
     * @var bool
     */
    public $expired;

    /**
     * @description The type of the component. Valid values:
     *
     *   JDK
     *   TOMCAT
     *   TENGINE
     *
     * @example JDK
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the component.
     *
     * @example oraclejdk7
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'componentId'  => 'ComponentId',
        'componentKey' => 'ComponentKey',
        'desc'         => 'Desc',
        'expired'      => 'Expired',
        'type'         => 'Type',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->componentKey) {
            $res['ComponentKey'] = $this->componentKey;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return component
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ComponentKey'])) {
            $model->componentKey = $map['ComponentKey'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
