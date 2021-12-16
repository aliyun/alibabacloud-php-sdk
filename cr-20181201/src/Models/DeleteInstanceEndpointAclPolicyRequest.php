<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceEndpointAclPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $entry;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'endpointType' => 'EndpointType',
        'entry'        => 'Entry',
        'instanceId'   => 'InstanceId',
        'moduleName'   => 'ModuleName',
        'regionId'     => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
