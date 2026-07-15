<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteFeaturesMatchPlanResponseBody;

use AlibabaCloud\Dara\Model;

class unPassedSiteQuotas extends Model
{
    /**
     * @var string
     */
    public $currentQuotaValue;

    /**
     * @var string
     */
    public $destQuotaValue;

    /**
     * @var string
     */
    public $quotaName;
    protected $_name = [
        'currentQuotaValue' => 'CurrentQuotaValue',
        'destQuotaValue' => 'DestQuotaValue',
        'quotaName' => 'QuotaName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentQuotaValue) {
            $res['CurrentQuotaValue'] = $this->currentQuotaValue;
        }

        if (null !== $this->destQuotaValue) {
            $res['DestQuotaValue'] = $this->destQuotaValue;
        }

        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
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
        if (isset($map['CurrentQuotaValue'])) {
            $model->currentQuotaValue = $map['CurrentQuotaValue'];
        }

        if (isset($map['DestQuotaValue'])) {
            $model->destQuotaValue = $map['DestQuotaValue'];
        }

        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        return $model;
    }
}
