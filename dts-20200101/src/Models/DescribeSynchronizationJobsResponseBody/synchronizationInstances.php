<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\dataInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\dataSynchronizationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\performance;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\precheckStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\structureInitializationStatus;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\synchronizationObjects;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\tags;
use AlibabaCloud\Tea\Model;

class synchronizationInstances extends Model
{
    /**
     * @description The specification of the data synchronization instance.
     *
     * @example 2021-06-28 17:34:53.0
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The synchronization latency, in seconds.
     *
     * @example true
     *
     * @var string
     */
    public $dataInitialization;

    /**
     * @description The error message returned if full data synchronization failed.
     *
     * @var dataInitializationStatus
     */
    public $dataInitializationStatus;

    /**
     * @description The progress of incremental data synchronization. Unit: %.
     *
     * >  This parameter is no longer available.
     * @var dataSynchronizationStatus
     */
    public $dataSynchronizationStatus;

    /**
     * @description The time when the data synchronization task was created. The time is displayed in the *yyyy-MM-dd* *HH:mm:ss*.0 format (UTC+8).
     *
     * @example 0
     *
     * @var string
     */
    public $delay;

    /**
     * @description The type of the destination instance.
     *
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @description The billing method of the data synchronization instance. Valid values:
     *
     *   **PrePaid**: subscription
     *   **PostPaid**: pay-as-you-go
     *
     * @example DTS-070211: Connect Source DB failed. cause by [com.mysql.jdbc.exceptions.jdbc4.MySQLNonTransientConnectionException:Could not create connection to database server. Attempted reconnect 3 times. Giving up.][com.mysql.jdbc.exceptions.jdbc4.CommunicationsException:Communications link failure\n\nThe last packet sent successfully to the server was 0 milliseconds ago. The driver has not received any packets from the server.][java.net.ConnectException:Connection timed out (Connection timed out)] About more information in [https://yq.aliyun.com/articles/499178].
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether schema synchronization is performed. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example 2021-07-07T16:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The time when the data synchronization task was created. The time is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format in UTC.
     *
     * @example 2021-06-28T09:36:32Z
     *
     * @var string
     */
    public $instanceCreateTime;

    /**
     * @description The tag value that corresponds to the tag key.
     *
     * @example 2021-06-28T09:34:53Z
     *
     * @var string
     */
    public $jobCreateTime;

    /**
     * @description The time when the instance was created. The time is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format in UTC.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The precheck status.
     *
     * @var performance
     */
    public $performance;

    /**
     * @description The result of each precheck item.
     *
     * @var precheckStatus
     */
    public $precheckStatus;

    /**
     * @description The type of the source instance.
     *
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @description The error message returned if data synchronization failed.
     *
     * @example synchronizing
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the data synchronization instance.
     *
     * @example true
     *
     * @var string
     */
    public $structureInitialization;

    /**
     * @description The error message returned if schema synchronization failed.
     *
     * @var structureInitializationStatus
     */
    public $structureInitializationStatus;

    /**
     * @description The tag key.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description The synchronization direction. Valid values:
     *
     *   **Forward**
     *   **Reverse**
     *
     * @example large
     *
     * @var string
     */
    public $synchronizationJobClass;

    /**
     * @description The collection of tags.
     *
     * @example dtsexjk1alb116****
     *
     * @var string
     */
    public $synchronizationJobId;

    /**
     * @description The time when the data synchronization instance expires. The time is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format in UTC.
     *
     * >  This parameter is returned only if the return value of the **PayType** parameter is **PrePaid**.
     * @var string
     */
    public $synchronizationJobName;

    /**
     * @description The source tables that are excluded from the data synchronization task.
     *
     * @var synchronizationObjects[]
     */
    public $synchronizationObjects;

    /**
     * @description The objects that are synchronized by the task.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime'                    => 'CreateTime',
        'dataInitialization'            => 'DataInitialization',
        'dataInitializationStatus'      => 'DataInitializationStatus',
        'dataSynchronizationStatus'     => 'DataSynchronizationStatus',
        'delay'                         => 'Delay',
        'destinationEndpoint'           => 'DestinationEndpoint',
        'errorMessage'                  => 'ErrorMessage',
        'expireTime'                    => 'ExpireTime',
        'instanceCreateTime'            => 'InstanceCreateTime',
        'jobCreateTime'                 => 'JobCreateTime',
        'payType'                       => 'PayType',
        'performance'                   => 'Performance',
        'precheckStatus'                => 'PrecheckStatus',
        'sourceEndpoint'                => 'SourceEndpoint',
        'status'                        => 'Status',
        'structureInitialization'       => 'StructureInitialization',
        'structureInitializationStatus' => 'StructureInitializationStatus',
        'synchronizationDirection'      => 'SynchronizationDirection',
        'synchronizationJobClass'       => 'SynchronizationJobClass',
        'synchronizationJobId'          => 'SynchronizationJobId',
        'synchronizationJobName'        => 'SynchronizationJobName',
        'synchronizationObjects'        => 'SynchronizationObjects',
        'tags'                          => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }
        if (null !== $this->dataInitializationStatus) {
            $res['DataInitializationStatus'] = null !== $this->dataInitializationStatus ? $this->dataInitializationStatus->toMap() : null;
        }
        if (null !== $this->dataSynchronizationStatus) {
            $res['DataSynchronizationStatus'] = null !== $this->dataSynchronizationStatus ? $this->dataSynchronizationStatus->toMap() : null;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceCreateTime) {
            $res['InstanceCreateTime'] = $this->instanceCreateTime;
        }
        if (null !== $this->jobCreateTime) {
            $res['JobCreateTime'] = $this->jobCreateTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->performance) {
            $res['Performance'] = null !== $this->performance ? $this->performance->toMap() : null;
        }
        if (null !== $this->precheckStatus) {
            $res['PrecheckStatus'] = null !== $this->precheckStatus ? $this->precheckStatus->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }
        if (null !== $this->structureInitializationStatus) {
            $res['StructureInitializationStatus'] = null !== $this->structureInitializationStatus ? $this->structureInitializationStatus->toMap() : null;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->synchronizationJobClass) {
            $res['SynchronizationJobClass'] = $this->synchronizationJobClass;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }
        if (null !== $this->synchronizationJobName) {
            $res['SynchronizationJobName'] = $this->synchronizationJobName;
        }
        if (null !== $this->synchronizationObjects) {
            $res['SynchronizationObjects'] = [];
            if (null !== $this->synchronizationObjects && \is_array($this->synchronizationObjects)) {
                $n = 0;
                foreach ($this->synchronizationObjects as $item) {
                    $res['SynchronizationObjects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synchronizationInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }
        if (isset($map['DataInitializationStatus'])) {
            $model->dataInitializationStatus = dataInitializationStatus::fromMap($map['DataInitializationStatus']);
        }
        if (isset($map['DataSynchronizationStatus'])) {
            $model->dataSynchronizationStatus = dataSynchronizationStatus::fromMap($map['DataSynchronizationStatus']);
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceCreateTime'])) {
            $model->instanceCreateTime = $map['InstanceCreateTime'];
        }
        if (isset($map['JobCreateTime'])) {
            $model->jobCreateTime = $map['JobCreateTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Performance'])) {
            $model->performance = performance::fromMap($map['Performance']);
        }
        if (isset($map['PrecheckStatus'])) {
            $model->precheckStatus = precheckStatus::fromMap($map['PrecheckStatus']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }
        if (isset($map['StructureInitializationStatus'])) {
            $model->structureInitializationStatus = structureInitializationStatus::fromMap($map['StructureInitializationStatus']);
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['SynchronizationJobClass'])) {
            $model->synchronizationJobClass = $map['SynchronizationJobClass'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }
        if (isset($map['SynchronizationJobName'])) {
            $model->synchronizationJobName = $map['SynchronizationJobName'];
        }
        if (isset($map['SynchronizationObjects'])) {
            if (!empty($map['SynchronizationObjects'])) {
                $model->synchronizationObjects = [];
                $n                             = 0;
                foreach ($map['SynchronizationObjects'] as $item) {
                    $model->synchronizationObjects[$n++] = null !== $item ? synchronizationObjects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
