<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListComponentsResponseBody\componentList;

use AlibabaCloud\Tea\Model;

class component extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $componentKey;

    /**
     * @var string
     */
    public $version;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'type'         => 'Type',
        'componentKey' => 'ComponentKey',
        'version'      => 'Version',
        'expired'      => 'Expired',
        'componentId'  => 'ComponentId',
        'desc'         => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->componentKey) {
            $res['ComponentKey'] = $this->componentKey;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ComponentKey'])) {
            $model->componentKey = $map['ComponentKey'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
