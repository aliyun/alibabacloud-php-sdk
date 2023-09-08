<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes;
use AlibabaCloud\Tea\Model;

class DescribeCenAttachedChildInstanceAttributeResponseBody extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-5mv960yjhja0dh****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The time when the network instance was attached to the CEN instance.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mmZ format. The time is displayed in UTC.
     * @example 2018-07-30T07:53Z
     *
     * @var string
     */
    public $childInstanceAttachTime;

    /**
     * @description The details about the network instance.
     *
     * @var childInstanceAttributes
     */
    public $childInstanceAttributes;

    /**
     * @description The ID of the network instance.
     *
     * @example vpc-2zebdboka7d7t37vo****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The name of the network instance.
     *
     * @example defaultvpc
     *
     * @var string
     */
    public $childInstanceName;

    /**
     * @description The ID of the Alibaba Cloud account to which the network instance belongs.
     *
     * @example 1688000000000000
     *
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @description The region ID of the network instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**: VPC
     *   **VBR**: VBR
     *   **CCN**: CCN instance
     *
     * @example VPC
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @description The ID of the request.
     *
     * @example ADD98358-D265-4060-87CB-A2427F5A8944
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the network instance is attached to the CEN instance.
     *
     *   **Attaching**: The network instance is being attached to the CEN instance.
     *   **Attached**: The network instance is attached to the CEN instance.
     *   **Detaching**: The network instance is being detached from the CEN instance.
     *
     * @example Attached
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cenId'                   => 'CenId',
        'childInstanceAttachTime' => 'ChildInstanceAttachTime',
        'childInstanceAttributes' => 'ChildInstanceAttributes',
        'childInstanceId'         => 'ChildInstanceId',
        'childInstanceName'       => 'ChildInstanceName',
        'childInstanceOwnerId'    => 'ChildInstanceOwnerId',
        'childInstanceRegionId'   => 'ChildInstanceRegionId',
        'childInstanceType'       => 'ChildInstanceType',
        'requestId'               => 'RequestId',
        'status'                  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->childInstanceAttachTime) {
            $res['ChildInstanceAttachTime'] = $this->childInstanceAttachTime;
        }
        if (null !== $this->childInstanceAttributes) {
            $res['ChildInstanceAttributes'] = null !== $this->childInstanceAttributes ? $this->childInstanceAttributes->toMap() : null;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->childInstanceName) {
            $res['ChildInstanceName'] = $this->childInstanceName;
        }
        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenAttachedChildInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChildInstanceAttachTime'])) {
            $model->childInstanceAttachTime = $map['ChildInstanceAttachTime'];
        }
        if (isset($map['ChildInstanceAttributes'])) {
            $model->childInstanceAttributes = childInstanceAttributes::fromMap($map['ChildInstanceAttributes']);
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['ChildInstanceName'])) {
            $model->childInstanceName = $map['ChildInstanceName'];
        }
        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
