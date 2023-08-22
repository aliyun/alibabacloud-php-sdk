<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceEndpointAclPolicyRequest extends Model
{
    /**
     * @description The type of the endpoint. Set the value to Internet.
     *
     * @example internet
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The CIDR block.
     *
     * @example 127.0.0.1/32
     *
     * @var string
     */
    public $entry;

    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the module that you want to access. Valid values:
     *
     *   `Registry`: the image repository.
     *   `Chart`: a Helm chart.
     *
     * @example Chart
     *
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'endpointType' => 'EndpointType',
        'entry'        => 'Entry',
        'instanceId'   => 'InstanceId',
        'moduleName'   => 'ModuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->entry) {
            $res['Entry'] = $this->entry;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceEndpointAclPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Entry'])) {
            $model->entry = $map['Entry'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        return $model;
    }
}
