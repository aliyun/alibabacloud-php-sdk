<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudServiceOrganizationStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $grantPrivilegeUrl;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var bool
     */
    public $serviceOpenStatus;

    /**
     * @var string
     */
    public $serviceOpenUrl;

    /**
     * @var bool
     */
    public $servicePrivilegeStatus;

    /**
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'grantPrivilegeUrl'      => 'GrantPrivilegeUrl',
        'organizationId'         => 'OrganizationId',
        'serviceOpenStatus'      => 'ServiceOpenStatus',
        'serviceOpenUrl'         => 'ServiceOpenUrl',
        'servicePrivilegeStatus' => 'ServicePrivilegeStatus',
        'serviceType'            => 'ServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantPrivilegeUrl) {
            $res['GrantPrivilegeUrl'] = $this->grantPrivilegeUrl;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->serviceOpenStatus) {
            $res['ServiceOpenStatus'] = $this->serviceOpenStatus;
        }
        if (null !== $this->serviceOpenUrl) {
            $res['ServiceOpenUrl'] = $this->serviceOpenUrl;
        }
        if (null !== $this->servicePrivilegeStatus) {
            $res['ServicePrivilegeStatus'] = $this->servicePrivilegeStatus;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantPrivilegeUrl'])) {
            $model->grantPrivilegeUrl = $map['GrantPrivilegeUrl'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['ServiceOpenStatus'])) {
            $model->serviceOpenStatus = $map['ServiceOpenStatus'];
        }
        if (isset($map['ServiceOpenUrl'])) {
            $model->serviceOpenUrl = $map['ServiceOpenUrl'];
        }
        if (isset($map['ServicePrivilegeStatus'])) {
            $model->servicePrivilegeStatus = $map['ServicePrivilegeStatus'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
