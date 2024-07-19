<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DeleteResourceInstancesRequest extends Model
{
    /**
     * @description Specifies whether to delete all the instances that fail to be created. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $allFailed;

    /**
     * @description The instances. Separate multiple instances with commas (,), such as `instanceId1,instanceId2`. For more information about how to query the instances, see [ListResourceInstances](https://help.aliyun.com/document_detail/412129.html).
     *
     * @example eas-i-xxxxxxx,eas-i-xxxxxxx
     *
     * @var string
     */
    public $instanceList;
    protected $_name = [
        'allFailed'    => 'AllFailed',
        'instanceList' => 'InstanceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allFailed) {
            $res['AllFailed'] = $this->allFailed;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteResourceInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllFailed'])) {
            $model->allFailed = $map['AllFailed'];
        }
        if (isset($map['InstanceList'])) {
            $model->instanceList = $map['InstanceList'];
        }

        return $model;
    }
}
