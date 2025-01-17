<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstanceAttributeResponseBody\childInstanceAttributes;

class DescribeCenAttachedChildInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var string
     */
    public $childInstanceAttachTime;
    /**
     * @var childInstanceAttributes
     */
    public $childInstanceAttributes;
    /**
     * @var string
     */
    public $childInstanceId;
    /**
     * @var string
     */
    public $childInstanceName;
    /**
     * @var int
     */
    public $childInstanceOwnerId;
    /**
     * @var string
     */
    public $childInstanceRegionId;
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
        if (null !== $this->childInstanceAttributes) {
            $this->childInstanceAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->childInstanceAttachTime) {
            $res['ChildInstanceAttachTime'] = $this->childInstanceAttachTime;
        }

        if (null !== $this->childInstanceAttributes) {
            $res['ChildInstanceAttributes'] = null !== $this->childInstanceAttributes ? $this->childInstanceAttributes->toArray($noStream) : $this->childInstanceAttributes;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
