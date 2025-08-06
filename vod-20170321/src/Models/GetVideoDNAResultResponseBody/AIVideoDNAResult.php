<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoDNAResultResponseBody\AIVideoDNAResult\fpShots;

class AIVideoDNAResult extends Model
{
    /**
     * @var fpShots[]
     */
    public $fpShots;
    protected $_name = [
        'fpShots' => 'FpShots',
    ];

    public function validate()
    {
        if (\is_array($this->fpShots)) {
            Model::validateArray($this->fpShots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShots) {
            if (\is_array($this->fpShots)) {
                $res['FpShots'] = [];
                $n1 = 0;
                foreach ($this->fpShots as $item1) {
                    $res['FpShots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FpShots'])) {
            if (!empty($map['FpShots'])) {
                $model->fpShots = [];
                $n1 = 0;
                foreach ($map['FpShots'] as $item1) {
                    $model->fpShots[$n1] = fpShots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
