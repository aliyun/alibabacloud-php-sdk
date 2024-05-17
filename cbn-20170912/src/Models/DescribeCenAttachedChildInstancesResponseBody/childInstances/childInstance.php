<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody\childInstances;

use AlibabaCloud\Tea\Model;

class childInstance extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-j3jzhw1zpau2km****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The time when the network instance was attached to the CEN instance.
     *
     * The time follows the ISO8601 standard in the YYYY-MM-DDThh:mmZ format. The time is displayed in UTC.
     * @example 2021-08-10T06:27Z
     *
     * @var string
     */
    public $childInstanceAttachTime;

    /**
     * @description The ID of the network instance.
     *
     * @example vpc-8vb1lu55yt9rlwgxl****
     *
     * @var string
     */
    public $childInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the network instance belongs.
     *
     * @example 1688000000000000
     *
     * @var int
     */
    public $childInstanceOwnerId;

    /**
     * @description The ID of the region where the network instance is deployed.
     *
     * @example cn-zhangjiakou
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
     * @description The status of the network instance. Valid values:
     *
     *   **Attaching**: The network instance is being created on the transit router.
     *   **Attached**: The network instance has been created on the transit router.
     *   **Detaching**: The network instance is being deleted from the transit router.
     *
     * @example Attached
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cenId'                   => 'CenId',
        'childInstanceAttachTime' => 'ChildInstanceAttachTime',
        'childInstanceId'         => 'ChildInstanceId',
        'childInstanceOwnerId'    => 'ChildInstanceOwnerId',
        'childInstanceRegionId'   => 'ChildInstanceRegionId',
        'childInstanceType'       => 'ChildInstanceType',
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
        if (null !== $this->childInstanceId) {
            $res['ChildInstanceId'] = $this->childInstanceId;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childInstance
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
        if (isset($map['ChildInstanceId'])) {
            $model->childInstanceId = $map['ChildInstanceId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
