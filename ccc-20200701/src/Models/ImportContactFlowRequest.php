<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ImportContactFlowRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {}
     *
     * @var string
     */
    public $flowPackageData;

    /**
     * @description This parameter is required.
     *
     * @example 9cfad875-6260-4a53-ab6e-b13e3fb31f7d
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example DE803553-8AA9-4B9D-9E4E-A82BC69EDCEE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowPackageData' => 'FlowPackageData',
        'instanceId'      => 'InstanceId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowPackageData) {
            $res['FlowPackageData'] = $this->flowPackageData;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportContactFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowPackageData'])) {
            $model->flowPackageData = $map['FlowPackageData'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
