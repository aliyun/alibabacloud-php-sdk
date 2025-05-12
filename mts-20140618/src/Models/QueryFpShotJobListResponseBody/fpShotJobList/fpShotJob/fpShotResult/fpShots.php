<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots\fpShot;

class fpShots extends Model
{
    /**
     * @var fpShot[]
     */
    public $fpShot;
    protected $_name = [
        'fpShot' => 'FpShot',
    ];

    public function validate()
    {
        if (\is_array($this->fpShot)) {
            Model::validateArray($this->fpShot);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShot) {
            if (\is_array($this->fpShot)) {
                $res['FpShot'] = [];
                $n1 = 0;
                foreach ($this->fpShot as $item1) {
                    $res['FpShot'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FpShot'])) {
            if (!empty($map['FpShot'])) {
                $model->fpShot = [];
                $n1 = 0;
                foreach ($map['FpShot'] as $item1) {
                    $model->fpShot[$n1++] = fpShot::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
