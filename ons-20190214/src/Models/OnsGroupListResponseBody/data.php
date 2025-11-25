<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsGroupListResponseBody\data\subscribeInfoDo;

class data extends Model
{
    /**
     * @var subscribeInfoDo[]
     */
    public $subscribeInfoDo;
    protected $_name = [
        'subscribeInfoDo' => 'SubscribeInfoDo',
    ];

    public function validate()
    {
        if (\is_array($this->subscribeInfoDo)) {
            Model::validateArray($this->subscribeInfoDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subscribeInfoDo) {
            if (\is_array($this->subscribeInfoDo)) {
                $res['SubscribeInfoDo'] = [];
                $n1 = 0;
                foreach ($this->subscribeInfoDo as $item1) {
                    $res['SubscribeInfoDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubscribeInfoDo'])) {
            if (!empty($map['SubscribeInfoDo'])) {
                $model->subscribeInfoDo = [];
                $n1 = 0;
                foreach ($map['SubscribeInfoDo'] as $item1) {
                    $model->subscribeInfoDo[$n1] = subscribeInfoDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
