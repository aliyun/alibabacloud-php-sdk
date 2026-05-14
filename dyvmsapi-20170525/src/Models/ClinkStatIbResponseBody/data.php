<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkStatIbResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkStatIbResponseBody\data\statIb;

class data extends Model
{
    /**
     * @var string
     */
    public $clinkRequestId;

    /**
     * @var statIb[]
     */
    public $statIb;
    protected $_name = [
        'clinkRequestId' => 'ClinkRequestId',
        'statIb' => 'StatIb',
    ];

    public function validate()
    {
        if (\is_array($this->statIb)) {
            Model::validateArray($this->statIb);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clinkRequestId) {
            $res['ClinkRequestId'] = $this->clinkRequestId;
        }

        if (null !== $this->statIb) {
            if (\is_array($this->statIb)) {
                $res['StatIb'] = [];
                $n1 = 0;
                foreach ($this->statIb as $item1) {
                    $res['StatIb'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClinkRequestId'])) {
            $model->clinkRequestId = $map['ClinkRequestId'];
        }

        if (isset($map['StatIb'])) {
            if (!empty($map['StatIb'])) {
                $model->statIb = [];
                $n1 = 0;
                foreach ($map['StatIb'] as $item1) {
                    $model->statIb[$n1] = statIb::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
