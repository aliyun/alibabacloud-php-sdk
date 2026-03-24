<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousSecurityEventyStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspiciousSecurityEventyStatisticsResponseBody\statistic\antiRansomwareStatistic;

class statistic extends Model
{
    /**
     * @var antiRansomwareStatistic
     */
    public $antiRansomwareStatistic;
    protected $_name = [
        'antiRansomwareStatistic' => 'AntiRansomwareStatistic',
    ];

    public function validate()
    {
        if (null !== $this->antiRansomwareStatistic) {
            $this->antiRansomwareStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->antiRansomwareStatistic) {
            $res['AntiRansomwareStatistic'] = null !== $this->antiRansomwareStatistic ? $this->antiRansomwareStatistic->toArray($noStream) : $this->antiRansomwareStatistic;
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
        if (isset($map['AntiRansomwareStatistic'])) {
            $model->antiRansomwareStatistic = antiRansomwareStatistic::fromMap($map['AntiRansomwareStatistic']);
        }

        return $model;
    }
}
