<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\jstack\threadTrackDo;

use AlibabaCloud\Dara\Model;

class trackList extends Model
{
    /**
     * @var string[]
     */
    public $track;
    protected $_name = [
        'track' => 'Track',
    ];

    public function validate()
    {
        if (\is_array($this->track)) {
            Model::validateArray($this->track);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->track) {
            if (\is_array($this->track)) {
                $res['Track'] = [];
                $n1 = 0;
                foreach ($this->track as $item1) {
                    $res['Track'][$n1] = $item1;
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
        if (isset($map['Track'])) {
            if (!empty($map['Track'])) {
                $model->track = [];
                $n1 = 0;
                foreach ($map['Track'] as $item1) {
                    $model->track[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
