<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountsResponseBody\cloudAccounts\cloudAccountHealthCheckResult;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListCloudAccountsResponseBody\cloudAccounts\privilegeHostingError;

class cloudAccounts extends Model
{
    /**
     * @var string
     */
    public $cloudAccountExternalId;

    /**
     * @var string
     */
    public $cloudAccountHealth;

    /**
     * @var cloudAccountHealthCheckResult
     */
    public $cloudAccountHealthCheckResult;

    /**
     * @var string
     */
    public $cloudAccountId;

    /**
     * @var string
     */
    public $cloudAccountName;

    /**
     * @var string
     */
    public $cloudAccountProviderName;

    /**
     * @var string
     */
    public $cloudAccountSite;

    /**
     * @var string
     */
    public $cloudAccountVendorType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $privilegeApplicationIds;

    /**
     * @var privilegeHostingError
     */
    public $privilegeHostingError;

    /**
     * @var string
     */
    public $privilegeHostingState;

    /**
     * @var string
     */
    public $privilegeStatus;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'cloudAccountExternalId' => 'CloudAccountExternalId',
        'cloudAccountHealth' => 'CloudAccountHealth',
        'cloudAccountHealthCheckResult' => 'CloudAccountHealthCheckResult',
        'cloudAccountId' => 'CloudAccountId',
        'cloudAccountName' => 'CloudAccountName',
        'cloudAccountProviderName' => 'CloudAccountProviderName',
        'cloudAccountSite' => 'CloudAccountSite',
        'cloudAccountVendorType' => 'CloudAccountVendorType',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'privilegeApplicationIds' => 'PrivilegeApplicationIds',
        'privilegeHostingError' => 'PrivilegeHostingError',
        'privilegeHostingState' => 'PrivilegeHostingState',
        'privilegeStatus' => 'PrivilegeStatus',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->cloudAccountHealthCheckResult) {
            $this->cloudAccountHealthCheckResult->validate();
        }
        if (\is_array($this->privilegeApplicationIds)) {
            Model::validateArray($this->privilegeApplicationIds);
        }
        if (null !== $this->privilegeHostingError) {
            $this->privilegeHostingError->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudAccountExternalId) {
            $res['CloudAccountExternalId'] = $this->cloudAccountExternalId;
        }

        if (null !== $this->cloudAccountHealth) {
            $res['CloudAccountHealth'] = $this->cloudAccountHealth;
        }

        if (null !== $this->cloudAccountHealthCheckResult) {
            $res['CloudAccountHealthCheckResult'] = null !== $this->cloudAccountHealthCheckResult ? $this->cloudAccountHealthCheckResult->toArray($noStream) : $this->cloudAccountHealthCheckResult;
        }

        if (null !== $this->cloudAccountId) {
            $res['CloudAccountId'] = $this->cloudAccountId;
        }

        if (null !== $this->cloudAccountName) {
            $res['CloudAccountName'] = $this->cloudAccountName;
        }

        if (null !== $this->cloudAccountProviderName) {
            $res['CloudAccountProviderName'] = $this->cloudAccountProviderName;
        }

        if (null !== $this->cloudAccountSite) {
            $res['CloudAccountSite'] = $this->cloudAccountSite;
        }

        if (null !== $this->cloudAccountVendorType) {
            $res['CloudAccountVendorType'] = $this->cloudAccountVendorType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->privilegeApplicationIds) {
            if (\is_array($this->privilegeApplicationIds)) {
                $res['PrivilegeApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->privilegeApplicationIds as $item1) {
                    $res['PrivilegeApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->privilegeHostingError) {
            $res['PrivilegeHostingError'] = null !== $this->privilegeHostingError ? $this->privilegeHostingError->toArray($noStream) : $this->privilegeHostingError;
        }

        if (null !== $this->privilegeHostingState) {
            $res['PrivilegeHostingState'] = $this->privilegeHostingState;
        }

        if (null !== $this->privilegeStatus) {
            $res['PrivilegeStatus'] = $this->privilegeStatus;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CloudAccountExternalId'])) {
            $model->cloudAccountExternalId = $map['CloudAccountExternalId'];
        }

        if (isset($map['CloudAccountHealth'])) {
            $model->cloudAccountHealth = $map['CloudAccountHealth'];
        }

        if (isset($map['CloudAccountHealthCheckResult'])) {
            $model->cloudAccountHealthCheckResult = cloudAccountHealthCheckResult::fromMap($map['CloudAccountHealthCheckResult']);
        }

        if (isset($map['CloudAccountId'])) {
            $model->cloudAccountId = $map['CloudAccountId'];
        }

        if (isset($map['CloudAccountName'])) {
            $model->cloudAccountName = $map['CloudAccountName'];
        }

        if (isset($map['CloudAccountProviderName'])) {
            $model->cloudAccountProviderName = $map['CloudAccountProviderName'];
        }

        if (isset($map['CloudAccountSite'])) {
            $model->cloudAccountSite = $map['CloudAccountSite'];
        }

        if (isset($map['CloudAccountVendorType'])) {
            $model->cloudAccountVendorType = $map['CloudAccountVendorType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PrivilegeApplicationIds'])) {
            if (!empty($map['PrivilegeApplicationIds'])) {
                $model->privilegeApplicationIds = [];
                $n1 = 0;
                foreach ($map['PrivilegeApplicationIds'] as $item1) {
                    $model->privilegeApplicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PrivilegeHostingError'])) {
            $model->privilegeHostingError = privilegeHostingError::fromMap($map['PrivilegeHostingError']);
        }

        if (isset($map['PrivilegeHostingState'])) {
            $model->privilegeHostingState = $map['PrivilegeHostingState'];
        }

        if (isset($map['PrivilegeStatus'])) {
            $model->privilegeStatus = $map['PrivilegeStatus'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
