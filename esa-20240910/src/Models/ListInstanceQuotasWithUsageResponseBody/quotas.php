<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponseBody\quotas\siteUsage;
use AlibabaCloud\Tea\Model;

class quotas extends Model
{
    /**
     * @description The quota name.
     *
     * @example redirect_rules|rule_quota
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description The quota value.
     *
     * @example 10
     *
     * @var string
     */
    public $quotaValue;

    /**
     * @description The usage of the quota in each website associated with the plan.
     *
     * @var siteUsage[]
     */
    public $siteUsage;

    /**
     * @description The quota usage.
     *
     * @example 3
     *
     * @var string
     */
    public $usage;
    protected $_name = [
        'quotaName' => 'QuotaName',
        'quotaValue' => 'QuotaValue',
        'siteUsage' => 'SiteUsage',
        'usage' => 'Usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }
        if (null !== $this->siteUsage) {
            $res['SiteUsage'] = [];
            if (null !== $this->siteUsage && \is_array($this->siteUsage)) {
                $n = 0;
                foreach ($this->siteUsage as $item) {
                    $res['SiteUsage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }
        if (isset($map['SiteUsage'])) {
            if (!empty($map['SiteUsage'])) {
                $model->siteUsage = [];
                $n = 0;
                foreach ($map['SiteUsage'] as $item) {
                    $model->siteUsage[$n++] = null !== $item ? siteUsage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
