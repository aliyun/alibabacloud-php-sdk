<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesRequest;

use AlibabaCloud\Tea\Model;

class filter extends Model
{
    /**
     * @description The parameter name of the filter. You can specify one or more parameter names to query services. Valid values:
     *
     * - Name：Query by service name.
     * - ServiceInstanceName：Query by service  instance name.
     * - ServiceInstanceId：Query by service  instance ID.
     * - ServiceId：Query by service ID.
     * - Version：Query by service version.
     * - Status：Query by service status.
     * - DeployType: Query by service deployType.
     * - ServiceType：Query by service deployType.
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
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate() {}

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
