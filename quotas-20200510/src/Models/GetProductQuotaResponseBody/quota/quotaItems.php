<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetProductQuotaResponseBody\quota;

use AlibabaCloud\Tea\Model;

class quotaItems extends Model
{
    /**
     * @description The value of the quota.
     *
     * @example 801
     *
     * @var string
     */
    public $quota;

    /**
     * @description The unit of the quota.
     *
     * >  The unit of each quota is unique. For example, the quota whose ID is `q_cbdch3` represents the maximum number of ACK clusters. The unit of this quota is clusters. The quota whose ID is `q_security-groups` represents the maximum number of security groups. The unit of this quota is security groups.
     * @example Count
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @description The category of the quota. Valid values:
     *
     *   BaseQuota: base quota.
     *   ReservedQuota: reserved quota.
     *
     * @example BaseQuota
     *
     * @var string
     */
    public $type;

    /**
     * @description The used quota.
     *
     * @example 26
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'quota'     => 'Quota',
        'quotaUnit' => 'QuotaUnit',
        'type'      => 'Type',
        'usage'     => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->quotaUnit) {
            $res['QuotaUnit'] = $this->quotaUnit;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotaItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['QuotaUnit'])) {
            $model->quotaUnit = $map['QuotaUnit'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
