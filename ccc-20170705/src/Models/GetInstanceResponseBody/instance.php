<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceResponseBody\instance\admin;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceResponseBody\instance\phoneNumbers;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $storageMaxSize;

    /**
     * @var int
     */
    public $storageMaxDays;

    /**
     * @var int
     */
    public $maxOnlineAgents;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var phoneNumbers
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $consoleUrl;

    /**
     * @var string
     */
    public $storageBucket;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var admin
     */
    public $admin;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'status'              => 'Status',
        'owner'               => 'Owner',
        'storageMaxSize'      => 'StorageMaxSize',
        'storageMaxDays'      => 'StorageMaxDays',
        'maxOnlineAgents'     => 'MaxOnlineAgents',
        'instanceId'          => 'InstanceId',
        'domainName'          => 'DomainName',
        'instanceDescription' => 'InstanceDescription',
        'phoneNumbers'        => 'PhoneNumbers',
        'consoleUrl'          => 'ConsoleUrl',
        'storageBucket'       => 'StorageBucket',
        'instanceName'        => 'InstanceName',
        'createdTime'         => 'CreatedTime',
        'directoryId'         => 'DirectoryId',
        'admin'               => 'Admin',
        'tenantId'            => 'TenantId',
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
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->storageMaxSize) {
            $res['StorageMaxSize'] = $this->storageMaxSize;
        }
        if (null !== $this->storageMaxDays) {
            $res['StorageMaxDays'] = $this->storageMaxDays;
        }
        if (null !== $this->maxOnlineAgents) {
            $res['MaxOnlineAgents'] = $this->maxOnlineAgents;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->phoneNumbers) {
            $res['PhoneNumbers'] = null !== $this->phoneNumbers ? $this->phoneNumbers->toMap() : null;
        }
        if (null !== $this->consoleUrl) {
            $res['ConsoleUrl'] = $this->consoleUrl;
        }
        if (null !== $this->storageBucket) {
            $res['StorageBucket'] = $this->storageBucket;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->admin) {
            $res['Admin'] = null !== $this->admin ? $this->admin->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['StorageMaxSize'])) {
            $model->storageMaxSize = $map['StorageMaxSize'];
        }
        if (isset($map['StorageMaxDays'])) {
            $model->storageMaxDays = $map['StorageMaxDays'];
        }
        if (isset($map['MaxOnlineAgents'])) {
            $model->maxOnlineAgents = $map['MaxOnlineAgents'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['PhoneNumbers'])) {
            $model->phoneNumbers = phoneNumbers::fromMap($map['PhoneNumbers']);
        }
        if (isset($map['ConsoleUrl'])) {
            $model->consoleUrl = $map['ConsoleUrl'];
        }
        if (isset($map['StorageBucket'])) {
            $model->storageBucket = $map['StorageBucket'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Admin'])) {
            $model->admin = admin::fromMap($map['Admin']);
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
