<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\audioCensorResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaCensorJobDetailResponseBody\mediaCensorJobDetail\audioCensorResult\audioDetailResultList\audioDetailResult;

class audioDetailResultList extends Model
{
    /**
     * @var audioDetailResult[]
     */
    public $audioDetailResult;
    protected $_name = [
        'audioDetailResult' => 'AudioDetailResult',
    ];

    public function validate()
    {
        if (\is_array($this->audioDetailResult)) {
            Model::validateArray($this->audioDetailResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioDetailResult) {
            if (\is_array($this->audioDetailResult)) {
                $res['AudioDetailResult'] = [];
                $n1 = 0;
                foreach ($this->audioDetailResult as $item1) {
                    $res['AudioDetailResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioDetailResult'])) {
            if (!empty($map['AudioDetailResult'])) {
                $model->audioDetailResult = [];
                $n1 = 0;
                foreach ($map['AudioDetailResult'] as $item1) {
                    $model->audioDetailResult[$n1] = audioDetailResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
