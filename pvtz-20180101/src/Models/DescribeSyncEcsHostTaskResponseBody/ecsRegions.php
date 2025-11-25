<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeSyncEcsHostTaskResponseBody\ecsRegions\ecsRegion;

class ecsRegions extends Model
{
    /**
     * @var ecsRegion[]
     */
    public $ecsRegion;
    protected $_name = [
        'ecsRegion' => 'EcsRegion',
    ];

    public function validate()
    {
        if (\is_array($this->ecsRegion)) {
            Model::validateArray($this->ecsRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsRegion) {
            if (\is_array($this->ecsRegion)) {
                $res['EcsRegion'] = [];
                $n1 = 0;
                foreach ($this->ecsRegion as $item1) {
                    $res['EcsRegion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EcsRegion'])) {
            if (!empty($map['EcsRegion'])) {
                $model->ecsRegion = [];
                $n1 = 0;
                foreach ($map['EcsRegion'] as $item1) {
                    $model->ecsRegion[$n1] = ecsRegion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
