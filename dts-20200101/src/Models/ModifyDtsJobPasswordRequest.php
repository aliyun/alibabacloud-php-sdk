<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDtsJobPasswordRequest extends Model
{
    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * >  You can call the [DescribeMigrationJobs](https://help.aliyun.com/document_detail/208139.html), [DescribeSubscriptionInstances](https://help.aliyun.com/document_detail/49442.html), or [DescribeSynchronizationJobs](https://help.aliyun.com/document_detail/49454.html) operation to query the instance ID
     * @example dtsl3m1213ye7l****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the DTS task. The DTS task can be a data migration, data synchronization, or change tracking task.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The database to which the password belongs. Valid values:
     *
     *   **src**: source database.
     *   **dest**: destination database.
     *
     * >  This parameter is required.
     * @example src
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The new password.
     *
     * >  This parameter is required and cannot be set to a value that is the same as the current password.
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the region where the DTS instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Synchronization direction, with values:
     * - **Forward** (default): Forward. - **Reverse**: Reverse.
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description The account of the source or destination database.
     *
     * >  This parameter is required.
     * @example dtstest
     *
     * @var string
     */
    public $userName;

    /**
     * @description Whether it is a seamless integration (Zero-ETL) task, the value can be:
     * - **false**: No. - **true**: Yes.
     * @example false
     *
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsInstanceId'            => 'DtsInstanceId',
        'dtsJobId'                 => 'DtsJobId',
        'endpoint'                 => 'Endpoint',
        'password'                 => 'Password',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'synchronizationDirection' => 'SynchronizationDirection',
        'userName'                 => 'UserName',
        'zeroEtlJob'               => 'ZeroEtlJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDtsJobPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
