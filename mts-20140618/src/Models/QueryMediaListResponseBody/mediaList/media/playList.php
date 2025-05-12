<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListResponseBody\mediaList\media\playList\play;

class playList extends Model
{
    /**
     * @var play[]
     */
    public $play;
    protected $_name = [
        'play' => 'Play',
    ];

    public function validate()
    {
        if (\is_array($this->play)) {
            Model::validateArray($this->play);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->play) {
            if (\is_array($this->play)) {
                $res['Play'] = [];
                $n1 = 0;
                foreach ($this->play as $item1) {
                    $res['Play'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Play'])) {
            if (!empty($map['Play'])) {
                $model->play = [];
                $n1 = 0;
                foreach ($map['Play'] as $item1) {
                    $model->play[$n1++] = play::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
