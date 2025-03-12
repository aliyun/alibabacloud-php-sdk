<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionExternalApplicationResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ProvisionExternalApplicationResponseBody\externalApplication\delegatedScope;
use AlibabaCloud\Tea\Model;

class externalApplication extends Model
{
    /**
     * @description The name of the application principal. The value is in the `<app_name>@app.<account_id>.onaliyun.com` format.
     *
     * @example GiteePrd@app.177242285274****.onaliyun.com
     *
     * @var string
     */
    public $appPrincipalName;

    /**
     * @description The time when the application was installed. The value is a timestamp.
     *
     * @example 1603693518000
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The information about the scopes of permissions that are granted to the application.
     *
     * @var delegatedScope
     */
    public $delegatedScope;

    /**
     * @description The display name of the application.
     *
     * @example GiteeAliyun
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the application.
     *
     * @example 403550611646604****
     *
     * @var string
     */
    public $foreignAppId;

    /**
     * @description The ID of the Alibaba Cloud account to which the external application belongs.
     *
     * @example 157242285274****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The update time. The value is a timestamp.
     *
     * @example 1603693518000
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'appPrincipalName' => 'AppPrincipalName',
        'createDate'       => 'CreateDate',
        'delegatedScope'   => 'DelegatedScope',
        'displayName'      => 'DisplayName',
        'foreignAppId'     => 'ForeignAppId',
        'tenantId'         => 'TenantId',
        'updateDate'       => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appPrincipalName) {
            $res['AppPrincipalName'] = $this->appPrincipalName;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->delegatedScope) {
            $res['DelegatedScope'] = null !== $this->delegatedScope ? $this->delegatedScope->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return externalApplication
     */
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
