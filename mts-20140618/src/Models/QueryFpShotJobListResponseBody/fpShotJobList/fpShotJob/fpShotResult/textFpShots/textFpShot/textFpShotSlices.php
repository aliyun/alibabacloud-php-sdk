<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots\textFpShot;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots\textFpShot\textFpShotSlices\textFpShotSlice;

class textFpShotSlices extends Model
{
    /**
     * @var textFpShotSlice[]
     */
    public $textFpShotSlice;
    protected $_name = [
        'textFpShotSlice' => 'TextFpShotSlice',
    ];

    public function validate()
    {
        if (\is_array($this->textFpShotSlice)) {
            Model::validateArray($this->textFpShotSlice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textFpShotSlice) {
            if (\is_array($this->textFpShotSlice)) {
                $res['TextFpShotSlice'] = [];
                $n1 = 0;
                foreach ($this->textFpShotSlice as $item1) {
                    $res['TextFpShotSlice'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TextFpShotSlice'])) {
            if (!empty($map['TextFpShotSlice'])) {
                $model->textFpShotSlice = [];
                $n1 = 0;
                foreach ($map['TextFpShotSlice'] as $item1) {
                    $model->textFpShotSlice[$n1] = textFpShotSlice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
