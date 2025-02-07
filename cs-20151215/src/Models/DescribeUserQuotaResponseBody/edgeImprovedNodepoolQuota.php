<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeUserQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class edgeImprovedNodepoolQuota extends Model
{
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $period;
    protected $_name = [
        'bandwidth' => 'bandwidth',
        'count'     => 'count',
        'period'    => 'period',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
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
        if (isset($map['bandwidth'])) {
            $model->bandwidth = $map['bandwidth'];
        }

        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        return $model;
    }
}
