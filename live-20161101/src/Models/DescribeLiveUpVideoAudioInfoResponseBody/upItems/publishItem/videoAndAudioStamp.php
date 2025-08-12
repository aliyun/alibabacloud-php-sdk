<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoAndAudioStamp\vAStamp;

class videoAndAudioStamp extends Model
{
    /**
     * @var vAStamp[]
     */
    public $vAStamp;
    protected $_name = [
        'vAStamp' => 'V_AStamp',
    ];

    public function validate()
    {
        if (\is_array($this->vAStamp)) {
            Model::validateArray($this->vAStamp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vAStamp) {
            if (\is_array($this->vAStamp)) {
                $res['V_AStamp'] = [];
                $n1 = 0;
                foreach ($this->vAStamp as $item1) {
                    $res['V_AStamp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['V_AStamp'])) {
            if (!empty($map['V_AStamp'])) {
                $model->vAStamp = [];
                $n1 = 0;
                foreach ($map['V_AStamp'] as $item1) {
                    $model->vAStamp[$n1] = vAStamp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
