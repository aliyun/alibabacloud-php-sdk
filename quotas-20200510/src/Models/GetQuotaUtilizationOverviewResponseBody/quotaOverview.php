<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewResponseBody\quotaOverview\inUse;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewResponseBody\quotaOverview\over80Percent;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaUtilizationOverviewResponseBody\quotaOverview\over95Percent;

class quotaOverview extends Model
{
    /**
     * @var inUse
     */
    public $inUse;

    /**
     * @var over80Percent
     */
    public $over80Percent;

    /**
     * @var over95Percent
     */
    public $over95Percent;
    protected $_name = [
        'inUse' => 'InUse',
        'over80Percent' => 'Over80Percent',
        'over95Percent' => 'Over95Percent',
    ];

    public function validate()
    {
        if (null !== $this->inUse) {
            $this->inUse->validate();
        }
        if (null !== $this->over80Percent) {
            $this->over80Percent->validate();
        }
        if (null !== $this->over95Percent) {
            $this->over95Percent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inUse) {
            $res['InUse'] = null !== $this->inUse ? $this->inUse->toArray($noStream) : $this->inUse;
        }

        if (null !== $this->over80Percent) {
            $res['Over80Percent'] = null !== $this->over80Percent ? $this->over80Percent->toArray($noStream) : $this->over80Percent;
        }

        if (null !== $this->over95Percent) {
            $res['Over95Percent'] = null !== $this->over95Percent ? $this->over95Percent->toArray($noStream) : $this->over95Percent;
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
        if (isset($map['InUse'])) {
            $model->inUse = inUse::fromMap($map['InUse']);
        }

        if (isset($map['Over80Percent'])) {
            $model->over80Percent = over80Percent::fromMap($map['Over80Percent']);
        }

        if (isset($map['Over95Percent'])) {
            $model->over95Percent = over95Percent::fromMap($map['Over95Percent']);
        }

        return $model;
    }
}
