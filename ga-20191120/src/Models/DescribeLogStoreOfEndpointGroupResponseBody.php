<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogStoreOfEndpointGroupResponseBody extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-xxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-xxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The response parameters.
     *
     * @example 1777E713-8456-55F1-9A69-9AD9EAE2B3B6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the Logstore.
     *
     * @example ga_log
     *
     * @var string
     */
    public $slsLogStoreName;

    /**
     * @description The name of the Simple Log Service project.
     *
     * @example ga_project_name
     *
     * @var string
     */
    public $slsProjectName;

    /**
     * @description The region ID of the Simple Log Service project.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $slsRegionId;

    /**
     * @description Indicates whether the endpoint group is bound to the Simple Log Service project.
     *
     *   **on:** The endpoint group is bound to the Simple Log Service project.
     *   **off:** The endpoint group is not bound to the Simple Log Service project.
     *
     * @example on - binding
     * off - unbinding
     * @var string
     */
    public $status;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'endpointGroupId' => 'EndpointGroupId',
        'listenerId'      => 'ListenerId',
        'requestId'       => 'RequestId',
        'slsLogStoreName' => 'SlsLogStoreName',
        'slsProjectName'  => 'SlsProjectName',
        'slsRegionId'     => 'SlsRegionId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slsLogStoreName) {
            $res['SlsLogStoreName'] = $this->slsLogStoreName;
        }
        if (null !== $this->slsProjectName) {
            $res['SlsProjectName'] = $this->slsProjectName;
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogStoreOfEndpointGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlsLogStoreName'])) {
            $model->slsLogStoreName = $map['SlsLogStoreName'];
        }
        if (isset($map['SlsProjectName'])) {
            $model->slsProjectName = $map['SlsProjectName'];
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
