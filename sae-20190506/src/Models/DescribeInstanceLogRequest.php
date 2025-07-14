<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceLogRequest extends Model
{
    /**
     * @description The ID of the sidecar container. You can call the [DescribeApplicationInstances](https://help.aliyun.com/document_detail/2834847.html) to obtain the ID.
     *
     * @example sidecar-test-01
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     *
     * @example ******-d700e680-aa4d-4ec1-afc2-6566b5ff4d7a-85d44d4bfc-*****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'containerId' => 'ContainerId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
