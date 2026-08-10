<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class GenerateYikeLoginTokenRequest extends Model
{
    /**
     * @var string
     */
    public $autoCreateProduction;

    /**
     * @var string
     */
    public $expires;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $productionAuth;

    /**
     * @var string
     */
    public $subUserCredit;

    /**
     * @var string
     */
    public $tenant;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'autoCreateProduction' => 'AutoCreateProduction',
        'expires' => 'Expires',
        'nickName' => 'NickName',
        'productionAuth' => 'ProductionAuth',
        'subUserCredit' => 'SubUserCredit',
        'tenant' => 'Tenant',
        'userName' => 'UserName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreateProduction) {
            $res['AutoCreateProduction'] = $this->autoCreateProduction;
        }

        if (null !== $this->expires) {
            $res['Expires'] = $this->expires;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->productionAuth) {
            $res['ProductionAuth'] = $this->productionAuth;
        }

        if (null !== $this->subUserCredit) {
            $res['SubUserCredit'] = $this->subUserCredit;
        }

        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AutoCreateProduction'])) {
            $model->autoCreateProduction = $map['AutoCreateProduction'];
        }

        if (isset($map['Expires'])) {
            $model->expires = $map['Expires'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['ProductionAuth'])) {
            $model->productionAuth = $map['ProductionAuth'];
        }

        if (isset($map['SubUserCredit'])) {
            $model->subUserCredit = $map['SubUserCredit'];
        }

        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
