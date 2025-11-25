<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack\threadTrackDo;

class jstack extends Model
{
    /**
     * @var threadTrackDo[]
     */
    public $threadTrackDo;
    protected $_name = [
        'threadTrackDo' => 'ThreadTrackDo',
    ];

    public function validate()
    {
        if (\is_array($this->threadTrackDo)) {
            Model::validateArray($this->threadTrackDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->threadTrackDo) {
            if (\is_array($this->threadTrackDo)) {
                $res['ThreadTrackDo'] = [];
                $n1 = 0;
                foreach ($this->threadTrackDo as $item1) {
                    $res['ThreadTrackDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ThreadTrackDo'])) {
            if (!empty($map['ThreadTrackDo'])) {
                $model->threadTrackDo = [];
                $n1 = 0;
                foreach ($map['ThreadTrackDo'] as $item1) {
                    $model->threadTrackDo[$n1] = threadTrackDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
