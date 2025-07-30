<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @description The IDs of the applications.
     *
     * @example Ram Account SSO
     *
     * @var string[]
     */
    public $applicationIds;

    /**
     * @description The name of the application. Only fuzzy match from the leftmost character is supported.
     *
     * @example Ram Account SSO
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The authorization of the application. Valid values:
     *
     *   authorize_required: Only the user with explicit authorization can access the application.
     *   default_all: By default, all users can access the application.
     *
     * @example authorize_required
     *
     * @var string
     */
    public $authorizationType;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Used to determine whether M2M client identity is enabled.
     * - enabled
     * - disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $m2MClientStatus;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Used to determine whether the ResourceServer capability is enabled.
     * - enabled
     * - disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $resourceServerStatus;

    /**
     * @description SSO type.
     * - oidc
     * - saml2
     * - oauth2/m2m
     *
     * @example oauth2/m2m
     *
     * @var string
     */
    public $ssoType;

    /**
     * @description The status of the application. Valid values:
     *
     *   Enabled: The application is enabled.
     *   Disabled: The application is disabled.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationIds' => 'ApplicationIds',
        'applicationName' => 'ApplicationName',
        'authorizationType' => 'AuthorizationType',
        'instanceId' => 'InstanceId',
        'm2MClientStatus' => 'M2MClientStatus',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceServerStatus' => 'ResourceServerStatus',
        'ssoType' => 'SsoType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIds) {
            $res['ApplicationIds'] = $this->applicationIds;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->m2MClientStatus) {
            $res['M2MClientStatus'] = $this->m2MClientStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceServerStatus) {
            $res['ResourceServerStatus'] = $this->resourceServerStatus;
        }
        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = $map['ApplicationIds'];
            }
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['M2MClientStatus'])) {
            $model->m2MClientStatus = $map['M2MClientStatus'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceServerStatus'])) {
            $model->resourceServerStatus = $map['ResourceServerStatus'];
        }
        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
