<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\ResourceUsage\groups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ResourceUsage\groups\items\buckets;

class items extends Model
{
    /**
     * @var buckets[]
     */
    public $buckets;

    /**
     * @var float
     */
    public $total;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $usageName;
    protected $_name = [
        'buckets' => 'buckets',
        'total' => 'total',
        'unit' => 'unit',
        'usageName' => 'usageName',
    ];

    public function validate()
    {
        if (\is_array($this->buckets)) {
            Model::validateArray($this->buckets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buckets) {
            if (\is_array($this->buckets)) {
                $res['buckets'] = [];
                $n1 = 0;
                foreach ($this->buckets as $item1) {
                    $res['buckets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        if (null !== $this->usageName) {
            $res['usageName'] = $this->usageName;
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
        if (isset($map['buckets'])) {
            if (!empty($map['buckets'])) {
                $model->buckets = [];
                $n1 = 0;
                foreach ($map['buckets'] as $item1) {
                    $model->buckets[$n1] = buckets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        if (isset($map['usageName'])) {
            $model->usageName = $map['usageName'];
        }

        return $model;
    }
}
