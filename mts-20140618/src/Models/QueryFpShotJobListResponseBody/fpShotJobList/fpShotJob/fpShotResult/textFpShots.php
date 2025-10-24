<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots\textFpShot;

class textFpShots extends Model
{
    /**
     * @var textFpShot[]
     */
    public $textFpShot;
    protected $_name = [
        'textFpShot' => 'TextFpShot',
    ];

    public function validate()
    {
        if (\is_array($this->textFpShot)) {
            Model::validateArray($this->textFpShot);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textFpShot) {
            if (\is_array($this->textFpShot)) {
                $res['TextFpShot'] = [];
                $n1 = 0;
                foreach ($this->textFpShot as $item1) {
                    $res['TextFpShot'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TextFpShot'])) {
            if (!empty($map['TextFpShot'])) {
                $model->textFpShot = [];
                $n1 = 0;
                foreach ($map['TextFpShot'] as $item1) {
                    $model->textFpShot[$n1] = textFpShot::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
