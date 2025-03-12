<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstancesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The parameter name of the filter. You can specify one or more filters. Valid values:
     *
     *   Name: The service name. If you want to perform a fuzzy match, specify the service name in the *xxx* format. For example, if the service name is My Service, you can set the filter value to *My* or *Service*.
     *   ServiceInstanceId: The ID of the service instance.
     *   ServiceId: The service ID.
     *   UserId: The user ID.
     *   Version: The service version.
     *   Status: The status of the service instance.
     *   DeployType: The deployment type of the service.
     *   ServiceType: The service type.
     *   OperationStartTimeBefore: The time before the hosted O\\&M starts.
     *   OperationStartTimeAfter: The time after the hosted O\\&M starts.
     *   OperationEndTimeBefore: The time before the hosted O\\&M ends.
     *   OperationEndTimeAfter: The time after the hosted O\\&M ends.
     *   OperatedServiceInstanceId: The ID of the hosted O\\&M instance that belongs to a private service.
     *   OperationServiceInstanceId: The ID of the hosted O\\&M service instance that belongs to a hosted O\\&M service.
     *   EnableInstanceOps: Whether the hosted O\\&M feature is enabled for service instances.
     *
     * @example ServiceInstanceId
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameter values of the filter.
     *
     * @var string[]
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }

        return $model;
    }
}
