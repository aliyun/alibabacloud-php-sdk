<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceEndpointAclPolicyRequest extends Model
{
    /**
     * @description The description.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The type of the endpoint. Set the value to Internet.
     *
     * @example internet
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The CIDR block that is accessible.
     *
     * @example 192.168.1.1/32
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
     * @example Registry
     *
     * @var string
     */
    public $moduleName;
    protected $_name = [
        'comment'      => 'Comment',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
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
     * @return CreateInstanceEndpointAclPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
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
