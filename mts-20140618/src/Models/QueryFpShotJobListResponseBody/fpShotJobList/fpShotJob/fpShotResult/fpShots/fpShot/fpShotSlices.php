<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots\fpShot;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots\fpShot\fpShotSlices\fpShotSlice;

class fpShotSlices extends Model
{
    /**
     * @var fpShotSlice[]
     */
    public $fpShotSlice;
    protected $_name = [
        'fpShotSlice' => 'FpShotSlice',
    ];

    public function validate()
    {
        if (\is_array($this->fpShotSlice)) {
            Model::validateArray($this->fpShotSlice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotSlice) {
            if (\is_array($this->fpShotSlice)) {
                $res['FpShotSlice'] = [];
                $n1 = 0;
                foreach ($this->fpShotSlice as $item1) {
                    $res['FpShotSlice'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FpShotSlice'])) {
            if (!empty($map['FpShotSlice'])) {
                $model->fpShotSlice = [];
                $n1 = 0;
                foreach ($map['FpShotSlice'] as $item1) {
                    $model->fpShotSlice[$n1++] = fpShotSlice::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
