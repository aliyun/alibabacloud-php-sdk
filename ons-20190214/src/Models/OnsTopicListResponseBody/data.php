<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsTopicListResponseBody\data\publishInfoDo;

class data extends Model
{
    /**
     * @var publishInfoDo[]
     */
    public $publishInfoDo;
    protected $_name = [
        'publishInfoDo' => 'PublishInfoDo',
    ];

    public function validate()
    {
        if (\is_array($this->publishInfoDo)) {
            Model::validateArray($this->publishInfoDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publishInfoDo) {
            if (\is_array($this->publishInfoDo)) {
                $res['PublishInfoDo'] = [];
                $n1 = 0;
                foreach ($this->publishInfoDo as $item1) {
                    $res['PublishInfoDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PublishInfoDo'])) {
            if (!empty($map['PublishInfoDo'])) {
                $model->publishInfoDo = [];
                $n1 = 0;
                foreach ($map['PublishInfoDo'] as $item1) {
                    $model->publishInfoDo[$n1] = publishInfoDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
