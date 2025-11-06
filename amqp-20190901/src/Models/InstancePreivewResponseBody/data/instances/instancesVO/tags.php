<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances\instancesVO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances\instancesVO\tags\tagsVO;

class tags extends Model
{
    /**
     * @var tagsVO[]
     */
    public $tagsVO;
    protected $_name = [
        'tagsVO' => 'TagsVO',
    ];

    public function validate()
    {
        if (\is_array($this->tagsVO)) {
            Model::validateArray($this->tagsVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagsVO) {
            if (\is_array($this->tagsVO)) {
                $res['TagsVO'] = [];
                $n1 = 0;
                foreach ($this->tagsVO as $item1) {
                    $res['TagsVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TagsVO'])) {
            if (!empty($map['TagsVO'])) {
                $model->tagsVO = [];
                $n1 = 0;
                foreach ($map['TagsVO'] as $item1) {
                    $model->tagsVO[$n1] = tagsVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
