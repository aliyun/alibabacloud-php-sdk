<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponseBody\quotas\siteUsage;

class quotas extends Model
{
    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $quotaValue;

    /**
     * @var siteUsage[]
     */
    public $siteUsage;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'quotaName' => 'QuotaName',
        'quotaValue' => 'QuotaValue',
        'siteUsage' => 'SiteUsage',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (\is_array($this->siteUsage)) {
            Model::validateArray($this->siteUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }

        if (null !== $this->siteUsage) {
            if (\is_array($this->siteUsage)) {
                $res['SiteUsage'] = [];
                $n1 = 0;
                foreach ($this->siteUsage as $item1) {
                    $res['SiteUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }

        if (isset($map['SiteUsage'])) {
            if (!empty($map['SiteUsage'])) {
                $model->siteUsage = [];
                $n1 = 0;
                foreach ($map['SiteUsage'] as $item1) {
                    $model->siteUsage[$n1] = siteUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
