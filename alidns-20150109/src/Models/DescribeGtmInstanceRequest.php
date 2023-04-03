<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceRequest extends Model
{
    /**
     * @description The ID of the GTM instance.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The language of the values of specific response parameters.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether additional information is required. Default value: **false**. If the value is **true**, the AccessStrategyNum and AddressPoolNum parameters are returned.
     *
     * @example false
     *
     * @var bool
     */
    public $needDetailAttributes;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'lang'                 => 'Lang',
        'needDetailAttributes' => 'NeedDetailAttributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->needDetailAttributes) {
            $res['NeedDetailAttributes'] = $this->needDetailAttributes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NeedDetailAttributes'])) {
            $model->needDetailAttributes = $map['NeedDetailAttributes'];
        }

        return $model;
    }
}
