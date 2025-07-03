<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody\tenantUsers\databases;

class tenantUsers extends Model
{
    /**
     * @var databases[]
     */
    public $databases;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $globalPermissions;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userStatus;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'databases' => 'Databases',
        'description' => 'Description',
        'globalPermissions' => 'GlobalPermissions',
        'instanceId' => 'InstanceId',
        'tenantId' => 'TenantId',
        'userName' => 'UserName',
        'userStatus' => 'UserStatus',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        if (\is_array($this->databases)) {
            Model::validateArray($this->databases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databases) {
            if (\is_array($this->databases)) {
                $res['Databases'] = [];
                $n1 = 0;
                foreach ($this->databases as $item1) {
                    $res['Databases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->globalPermissions) {
            $res['GlobalPermissions'] = $this->globalPermissions;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = [];
                $n1 = 0;
                foreach ($map['Databases'] as $item1) {
                    $model->databases[$n1] = databases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GlobalPermissions'])) {
            $model->globalPermissions = $map['GlobalPermissions'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
