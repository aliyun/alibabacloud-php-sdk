<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBPerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBPerformanceResponseBody\performanceKeys\performanceKeys;

class performanceKeys extends Model
{
    /**
     * @var performanceKeys[]
     */
    public $performanceKeys;
    protected $_name = [
        'performanceKeys' => 'performanceKeys',
    ];

    public function validate()
    {
        if (\is_array($this->performanceKeys)) {
            Model::validateArray($this->performanceKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->performanceKeys) {
            if (\is_array($this->performanceKeys)) {
                $res['performanceKeys'] = [];
                $n1 = 0;
                foreach ($this->performanceKeys as $item1) {
                    $res['performanceKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['performanceKeys'])) {
            if (!empty($map['performanceKeys'])) {
                $model->performanceKeys = [];
                $n1 = 0;
                foreach ($map['performanceKeys'] as $item1) {
                    $model->performanceKeys[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
