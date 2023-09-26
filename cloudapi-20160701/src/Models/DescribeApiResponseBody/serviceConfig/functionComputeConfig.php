<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiResponseBody\serviceConfig;

use AlibabaCloud\Tea\Model;

class functionComputeConfig extends Model
{
    /**
     * @var string
     */
    public $fcRegionId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'fcRegionId'   => 'FcRegionId',
        'functionName' => 'FunctionName',
        'qualifier'    => 'Qualifier',
        'roleArn'      => 'RoleArn',
        'serviceName'  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fcRegionId) {
            $res['FcRegionId'] = $this->fcRegionId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->qualifier) {
            $res['Qualifier'] = $this->qualifier;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return functionComputeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FcRegionId'])) {
            $model->fcRegionId = $map['FcRegionId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Qualifier'])) {
            $model->qualifier = $map['Qualifier'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
