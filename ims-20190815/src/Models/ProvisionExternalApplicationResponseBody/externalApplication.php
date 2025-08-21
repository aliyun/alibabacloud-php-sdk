<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionExternalApplicationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionExternalApplicationResponseBody\externalApplication\delegatedScope;

class externalApplication extends Model
{
    /**
     * @var string
     */
    public $appPrincipalName;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var delegatedScope
     */
    public $delegatedScope;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $foreignAppId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'appPrincipalName' => 'AppPrincipalName',
        'createDate' => 'CreateDate',
        'delegatedScope' => 'DelegatedScope',
        'displayName' => 'DisplayName',
        'foreignAppId' => 'ForeignAppId',
        'tenantId' => 'TenantId',
        'updateDate' => 'UpdateDate',
    ];

    public function validate()
    {
        if (null !== $this->delegatedScope) {
            $this->delegatedScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPrincipalName) {
            $res['AppPrincipalName'] = $this->appPrincipalName;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->delegatedScope) {
            $res['DelegatedScope'] = null !== $this->delegatedScope ? $this->delegatedScope->toArray($noStream) : $this->delegatedScope;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->foreignAppId) {
            $res['ForeignAppId'] = $this->foreignAppId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['AppPrincipalName'])) {
            $model->appPrincipalName = $map['AppPrincipalName'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DelegatedScope'])) {
            $model->delegatedScope = delegatedScope::fromMap($map['DelegatedScope']);
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['ForeignAppId'])) {
            $model->foreignAppId = $map['ForeignAppId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
