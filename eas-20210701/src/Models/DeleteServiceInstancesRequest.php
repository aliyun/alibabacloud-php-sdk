<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteServiceInstancesRequest extends Model
{
    /**
     * @description The name of the container whose process needs to be restarted. This parameter takes effect only if the SoftRestart parameter is set to true.
     *
     * @example worker0
     *
     * @var string
     */
    public $container;

    /**
     * @description The instances that you want to restart. Separate multiple instance names with commas (,). For more information about how to query the instance name, see [ListServiceInstances](https://help.aliyun.com/document_detail/412108.html).
     *
     * This parameter is required.
     * @example foo-rdsbxxxx,foo-rdsaxxxx
     *
     * @var string
     */
    public $instanceList;

    /**
     * @description Specifies whether to restart only the container process without recreating the instance. Default value: false. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $softRestart;
    protected $_name = [
        'container'    => 'Container',
        'instanceList' => 'InstanceList',
        'softRestart'  => 'SoftRestart',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->softRestart) {
            $res['SoftRestart'] = $this->softRestart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteServiceInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['InstanceList'])) {
            $model->instanceList = $map['InstanceList'];
        }
        if (isset($map['SoftRestart'])) {
            $model->softRestart = $map['SoftRestart'];
        }

        return $model;
    }
}
