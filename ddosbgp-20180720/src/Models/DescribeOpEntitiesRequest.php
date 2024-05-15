<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeOpEntitiesRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DescribeOpEntities**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The details of the operation log.
     *
     * This parameter is required.
     * @example 1640880000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The page number of the returned page.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The sort order of operation logs. Valid values:
     *
     *   **ASC**: the ascending order.
     *   **DESC**: the descending order.
     *
     * @example opdate
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The ID of the region where the Anti-DDoS Origin instance resides.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query the most recent region list.
     * @example ASC
     *
     * @var string
     */
    public $orderDir;

    /**
     * @description The type of the operation object. The value is fixed as **1**, which indicates Anti-DDoS Origin instances.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the Alibaba Cloud account that performs the operation.
     *
     * >  If the value is **system**, the operation is performed by Anti-DDoS Origin.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The details about the operation. The value is a string that consists of a JSON struct. The JSON struct contains the following fields:
     *
     *   **entity**: the operation object. Data type: object. The fields that are included in the value of the **entity** parameter vary based on the value of the **OpAction** parameter. Take note of the following items:
     *
     *   If the value of the **OpAction** parameter is **3**, the value of the **entity** parameter consists of the following field:
     *
     *   **ips**: the public IP addresses that are protected by the Anti-DDoS Origin instance. Data type: array
     *
     *   If the value of the **OpAction** parameter is **4**, the value of the **entity** parameter consists of the following field:
     *
     *   **ips**: the public IP addresses that are no longer protected by the Anti-DDoS Origin instance. Data type: array.
     *
     *   If the value of the **OpAction** parameter is **5**, the value of the **entity** parameter consists of the following fields:
     *
     *   **baseBandwidth**: the basic protection bandwidth. Unit: Gbit/s. Data type: integer.
     *   **elasticBandwidth**: the burstable protection bandwidth. Unit: Gbit/s. Data type: integer.
     *   **opSource**: the source of the operation. The value is fixed as **1**, indicating that the operation is performed by Anti-DDoS Origin. Data type: integer.
     *
     *   If the value of the **OpAction** parameter is **6**, the value of the **entity** parameter consists of the following field:
     *
     *   **ips**: the public IP addresses for which to deactivate blackhole filtering. Data type: array.
     *
     *   If the value of the **OpAction** parameter is **7**, the **entity** parameter is not returned.
     *
     *   If the value of the **OpAction** parameter is **8**, the value of the **entity** parameter consists of the following fields:
     *
     *   **baseBandwidth**: the basic protection bandwidth. Unit: Gbit/s. Data type: integer.
     *   **elasticBandwidth**: the burstable protection bandwidth. Unit: Gbit/s. Data type: integer.
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The sorting method of operation logs. Set the value to **opdate**, which indicates sorting based on the operation time.
     *
     * This parameter is required.
     * @example 1609430400000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'endTime'         => 'EndTime',
        'instanceId'      => 'InstanceId',
        'orderBy'         => 'OrderBy',
        'orderDir'        => 'OrderDir',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->orderDir) {
            $res['OrderDir'] = $this->orderDir;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpEntitiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OrderDir'])) {
            $model->orderDir = $map['OrderDir'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
