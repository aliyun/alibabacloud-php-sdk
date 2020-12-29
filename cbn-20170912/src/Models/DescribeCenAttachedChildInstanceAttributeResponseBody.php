<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DescribeCenAttachedChildInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $childInstanceType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $childInstanceAttachTime;

    /**
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @var string
     */
    public $childInstanceName;

    /**
     * @var string
     */
    public $childInstanceId;

    /**
     * @var string
     */
    public $childInstanceRegionId;
    protected $_name = [
        'status'                  => 'Status',
        'childInstanceType'       => 'ChildInstanceType',
        'requestId'               => 'RequestId',
        'cenId'                   => 'CenId',
        'childInstanceAttachTime' => 'ChildInstanceAttachTime',
        'childInstanceOwnerId'    => 'ChildInstanceOwnerId',
        'childInstanceName'       => 'ChildInstanceName',
        'childInstanceId'         => 'ChildInstanceId',
        'childInstanceRegionId'   => 'ChildInstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->childInstanceType) {
            $res['ChildInstanceType'] = $this->childInstanceType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->childInstanceAttachTime) {
            $res['ChildInstanceAttachTime'] = $this->childInstanceAttachTime;
        }
        if (null !== $this->childInstanceOwnerId) {
            $res['ChildInstanceOwnerId'] = $this->childInstanceOwnerId;
        }
        if (null !== $this->childInstanceName) {
            $res['ChildInstanceName'] = $this->childInstanceName;
        }
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
        }
        if (null !== $this->childInstanceRegionId) {
            $res['ChildInstanceRegionId'] = $this->childInstanceRegionId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ChildInstanceType'])) {
            $model->childInstanceType = $map['ChildInstanceType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ChildInstanceAttachTime'])) {
            $model->childInstanceAttachTime = $map['ChildInstanceAttachTime'];
        }
        if (isset($map['ChildInstanceOwnerId'])) {
            $model->childInstanceOwnerId = $map['ChildInstanceOwnerId'];
        }
        if (isset($map['ChildInstanceName'])) {
            $model->childInstanceName = $map['ChildInstanceName'];
        }
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
        }
        if (isset($map['ChildInstanceRegionId'])) {
            $model->childInstanceRegionId = $map['ChildInstanceRegionId'];
        }

        return $model;
    }
}
