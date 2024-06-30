<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListProductQuotasResponseBody\quotas;

use AlibabaCloud\Tea\Model;

class quotaItems extends Model
{
    /**
     * @description The quota value.
     *
     * @example 10
     *
     * @var string
     */
    public $quota;

    /**
     * @description The unit of the quota.
     *
     * @example AMOUNT
     *
     * @var string
     */
    public $quotaUnit;

    /**
     * @description The category of the quota. Valid values:
     *
     *   BaseQuota: base quota
     *   ReservedQuota: reserved quota
     *
     * @example BaseQuota
     *
     * @var string
     */
    public $type;

    /**
     * @description The quota usage.
     *
     * @example 1
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
