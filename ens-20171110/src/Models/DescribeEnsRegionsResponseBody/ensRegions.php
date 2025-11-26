<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody\ensRegions\ensRegions;

class ensRegions extends Model
{
    /**
     * @var ensRegions[]
     */
    public $ensRegions;
    protected $_name = [
        'ensRegions' => 'EnsRegions',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegions)) {
            Model::validateArray($this->ensRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensRegions) {
            if (\is_array($this->ensRegions)) {
                $res['EnsRegions'] = [];
                $n1 = 0;
                foreach ($this->ensRegions as $item1) {
                    $res['EnsRegions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnsRegions'])) {
            if (!empty($map['EnsRegions'])) {
                $model->ensRegions = [];
                $n1 = 0;
                foreach ($map['EnsRegions'] as $item1) {
                    $model->ensRegions[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
