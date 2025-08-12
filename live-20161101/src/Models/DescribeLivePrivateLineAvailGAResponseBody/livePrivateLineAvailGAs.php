<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody\livePrivateLineAvailGAs\livePrivateLineAvailGA;

class livePrivateLineAvailGAs extends Model
{
    /**
     * @var livePrivateLineAvailGA[]
     */
    public $livePrivateLineAvailGA;
    protected $_name = [
        'livePrivateLineAvailGA' => 'LivePrivateLineAvailGA',
    ];

    public function validate()
    {
        if (\is_array($this->livePrivateLineAvailGA)) {
            Model::validateArray($this->livePrivateLineAvailGA);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livePrivateLineAvailGA) {
            if (\is_array($this->livePrivateLineAvailGA)) {
                $res['LivePrivateLineAvailGA'] = [];
                $n1 = 0;
                foreach ($this->livePrivateLineAvailGA as $item1) {
                    $res['LivePrivateLineAvailGA'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LivePrivateLineAvailGA'])) {
            if (!empty($map['LivePrivateLineAvailGA'])) {
                $model->livePrivateLineAvailGA = [];
                $n1 = 0;
                foreach ($map['LivePrivateLineAvailGA'] as $item1) {
                    $model->livePrivateLineAvailGA[$n1] = livePrivateLineAvailGA::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
