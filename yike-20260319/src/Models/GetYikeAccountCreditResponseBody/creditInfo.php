<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAccountCreditResponseBody;

use AlibabaCloud\Dara\Model;

class creditInfo extends Model
{
    /**
     * @var float
     */
    public $grantedCreditQuota;

    /**
     * @var float
     */
    public $grantedCreditQuotaUsage;

    /**
     * @var float
     */
    public $packCreditQuota;

    /**
     * @var float
     */
    public $packCreditQuotaUsage;

    /**
     * @var float
     */
    public $resourceCreditQuota;

    /**
     * @var float
     */
    public $resourceCreditQuotaUsage;
    protected $_name = [
        'grantedCreditQuota' => 'GrantedCreditQuota',
        'grantedCreditQuotaUsage' => 'GrantedCreditQuotaUsage',
        'packCreditQuota' => 'PackCreditQuota',
        'packCreditQuotaUsage' => 'PackCreditQuotaUsage',
        'resourceCreditQuota' => 'ResourceCreditQuota',
        'resourceCreditQuotaUsage' => 'ResourceCreditQuotaUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grantedCreditQuota) {
            $res['GrantedCreditQuota'] = $this->grantedCreditQuota;
        }

        if (null !== $this->grantedCreditQuotaUsage) {
            $res['GrantedCreditQuotaUsage'] = $this->grantedCreditQuotaUsage;
        }

        if (null !== $this->packCreditQuota) {
            $res['PackCreditQuota'] = $this->packCreditQuota;
        }

        if (null !== $this->packCreditQuotaUsage) {
            $res['PackCreditQuotaUsage'] = $this->packCreditQuotaUsage;
        }

        if (null !== $this->resourceCreditQuota) {
            $res['ResourceCreditQuota'] = $this->resourceCreditQuota;
        }

        if (null !== $this->resourceCreditQuotaUsage) {
            $res['ResourceCreditQuotaUsage'] = $this->resourceCreditQuotaUsage;
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
        if (isset($map['GrantedCreditQuota'])) {
            $model->grantedCreditQuota = $map['GrantedCreditQuota'];
        }

        if (isset($map['GrantedCreditQuotaUsage'])) {
            $model->grantedCreditQuotaUsage = $map['GrantedCreditQuotaUsage'];
        }

        if (isset($map['PackCreditQuota'])) {
            $model->packCreditQuota = $map['PackCreditQuota'];
        }

        if (isset($map['PackCreditQuotaUsage'])) {
            $model->packCreditQuotaUsage = $map['PackCreditQuotaUsage'];
        }

        if (isset($map['ResourceCreditQuota'])) {
            $model->resourceCreditQuota = $map['ResourceCreditQuota'];
        }

        if (isset($map['ResourceCreditQuotaUsage'])) {
            $model->resourceCreditQuotaUsage = $map['ResourceCreditQuotaUsage'];
        }

        return $model;
    }
}
