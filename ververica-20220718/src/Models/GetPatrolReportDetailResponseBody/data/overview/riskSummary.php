<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolReportDetailResponseBody\data\overview;

use AlibabaCloud\Dara\Model;

class riskSummary extends Model
{
    /**
     * @var int
     */
    public $critical;

    /**
     * @var int
     */
    public $info;

    /**
     * @var int
     */
    public $warning;
    protected $_name = [
        'critical' => 'critical',
        'info' => 'info',
        'warning' => 'warning',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->critical) {
            $res['critical'] = $this->critical;
        }

        if (null !== $this->info) {
            $res['info'] = $this->info;
        }

        if (null !== $this->warning) {
            $res['warning'] = $this->warning;
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
        if (isset($map['critical'])) {
            $model->critical = $map['critical'];
        }

        if (isset($map['info'])) {
            $model->info = $map['info'];
        }

        if (isset($map['warning'])) {
            $model->warning = $map['warning'];
        }

        return $model;
    }
}
