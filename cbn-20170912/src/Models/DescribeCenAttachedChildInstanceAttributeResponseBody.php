<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes;
use AlibabaCloud\Tea\Model;

class DescribeCenAttachedChildInstanceAttributeResponseBody extends Model
{
    /**
     * @example cen-5mv960yjhja0dh****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 2018-07-30T07:53Z
     *
     * @var string
     */
    public $childInstanceAttachTime;

    /**
     * @var childInstanceAttributes
     */
    public $childInstanceAttributes;

    /**
     * @example vpc-2zebdboka7d7t37vo****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @example defaultvpc
     *
     * @var string
     */
    public $childInstanceName;

    /**
     * @example 1688000000000000
     *
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $childInstanceRegionId;

    /**
     * @example VPC
     *
     * @var string
     */
    public $childInstanceType;

    /**
     * @example ADD98358-D265-4060-87CB-A2427F5A8944
     *
     * @var string
     */
    public $requestId;

    /**
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
