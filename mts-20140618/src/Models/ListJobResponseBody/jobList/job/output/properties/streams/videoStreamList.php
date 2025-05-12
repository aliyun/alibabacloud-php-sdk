<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\properties\streams;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListJobResponseBody\jobList\job\output\properties\streams\videoStreamList\videoStream;

class videoStreamList extends Model
{
    /**
     * @var videoStream[]
     */
    public $videoStream;
    protected $_name = [
        'videoStream' => 'VideoStream',
    ];

    public function validate()
    {
        if (\is_array($this->videoStream)) {
            Model::validateArray($this->videoStream);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoStream) {
            if (\is_array($this->videoStream)) {
                $res['VideoStream'] = [];
                $n1 = 0;
                foreach ($this->videoStream as $item1) {
                    $res['VideoStream'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoStream'])) {
            if (!empty($map['VideoStream'])) {
                $model->videoStream = [];
                $n1 = 0;
                foreach ($map['VideoStream'] as $item1) {
                    $model->videoStream[$n1++] = videoStream::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
