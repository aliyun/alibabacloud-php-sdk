<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseResponseBody\license;

use AlibabaCloud\Dara\Model;

class instanceLicenseDetail extends Model
{
    /**
     * @var string
     */
    public $conditionalAccessPolicyLicenseStatus;

    /**
     * @var string
     */
    public $m2mApplicationLicenseStatus;

    /**
     * @var int
     */
    public $m2mApplicationQuota;

    /**
     * @var int
     */
    public $networkAccessEndpointQuota;

    /**
     * @var int
     */
    public $userQuota;
    protected $_name = [
        'conditionalAccessPolicyLicenseStatus' => 'ConditionalAccessPolicyLicenseStatus',
        'm2mApplicationLicenseStatus' => 'M2mApplicationLicenseStatus',
        'm2mApplicationQuota' => 'M2mApplicationQuota',
        'networkAccessEndpointQuota' => 'NetworkAccessEndpointQuota',
        'userQuota' => 'UserQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionalAccessPolicyLicenseStatus) {
            $res['ConditionalAccessPolicyLicenseStatus'] = $this->conditionalAccessPolicyLicenseStatus;
        }

        if (null !== $this->m2mApplicationLicenseStatus) {
            $res['M2mApplicationLicenseStatus'] = $this->m2mApplicationLicenseStatus;
        }

        if (null !== $this->m2mApplicationQuota) {
            $res['M2mApplicationQuota'] = $this->m2mApplicationQuota;
        }

        if (null !== $this->networkAccessEndpointQuota) {
            $res['NetworkAccessEndpointQuota'] = $this->networkAccessEndpointQuota;
        }

        if (null !== $this->userQuota) {
            $res['UserQuota'] = $this->userQuota;
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
        if (isset($map['ConditionalAccessPolicyLicenseStatus'])) {
            $model->conditionalAccessPolicyLicenseStatus = $map['ConditionalAccessPolicyLicenseStatus'];
        }

        if (isset($map['M2mApplicationLicenseStatus'])) {
            $model->m2mApplicationLicenseStatus = $map['M2mApplicationLicenseStatus'];
        }

        if (isset($map['M2mApplicationQuota'])) {
            $model->m2mApplicationQuota = $map['M2mApplicationQuota'];
        }

        if (isset($map['NetworkAccessEndpointQuota'])) {
            $model->networkAccessEndpointQuota = $map['NetworkAccessEndpointQuota'];
        }

        if (isset($map['UserQuota'])) {
            $model->userQuota = $map['UserQuota'];
        }

        return $model;
    }
}
