<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUserByAccessKeyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetUserByAccessKeyResponseBody\userInfo\tenantRoles;

class userInfo extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceUserId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tenantRoles[]
     */
    public $tenantRoles;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'mail' => 'Mail',
        'nickName' => 'NickName',
        'sourceType' => 'SourceType',
        'sourceUserId' => 'SourceUserId',
        'status' => 'Status',
        'tenantRoles' => 'TenantRoles',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->tenantRoles)) {
            Model::validateArray($this->tenantRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mail) {
            $res['Mail'] = $this->mail;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceUserId) {
            $res['SourceUserId'] = $this->sourceUserId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantRoles) {
            if (\is_array($this->tenantRoles)) {
                $res['TenantRoles'] = [];
                $n1 = 0;
                foreach ($this->tenantRoles as $item1) {
                    $res['TenantRoles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Mail'])) {
            $model->mail = $map['Mail'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SourceUserId'])) {
            $model->sourceUserId = $map['SourceUserId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantRoles'])) {
            if (!empty($map['TenantRoles'])) {
                $model->tenantRoles = [];
                $n1 = 0;
                foreach ($map['TenantRoles'] as $item1) {
                    $model->tenantRoles[$n1] = tenantRoles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
