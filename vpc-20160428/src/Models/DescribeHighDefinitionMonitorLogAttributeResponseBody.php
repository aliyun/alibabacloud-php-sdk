<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeHighDefinitionMonitorLogAttributeResponseBody extends Model
{
    /**
     * @description The ID of the instance whose fine-grained monitoring configurations you want to query.
     *
     * @example eip-wz9fi6qboho9fwgx7****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of instance for which you want to query fine-grained monitoring. Only **EIP** may be returned.
     *
     * @example EIP
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the project.
     *
     * @example hdmonitor-cn-shenzhen-1658206966225390
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The name of the Logstore.
     *
     * @example hdmonitor
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The request ID.
     *
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B457
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation is performed. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'logProject' => 'LogProject',
        'logStore' => 'LogStore',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHighDefinitionMonitorLogAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
