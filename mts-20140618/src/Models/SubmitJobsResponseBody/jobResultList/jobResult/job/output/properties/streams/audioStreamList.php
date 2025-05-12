<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\properties\streams;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitJobsResponseBody\jobResultList\jobResult\job\output\properties\streams\audioStreamList\audioStream;

class audioStreamList extends Model
{
    /**
     * @var audioStream[]
     */
    public $audioStream;
    protected $_name = [
        'audioStream' => 'AudioStream',
    ];

    public function validate()
    {
        if (\is_array($this->audioStream)) {
            Model::validateArray($this->audioStream);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioStream) {
            if (\is_array($this->audioStream)) {
                $res['AudioStream'] = [];
                $n1 = 0;
                foreach ($this->audioStream as $item1) {
                    $res['AudioStream'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioStream'])) {
            if (!empty($map['AudioStream'])) {
                $model->audioStream = [];
                $n1 = 0;
                foreach ($map['AudioStream'] as $item1) {
                    $model->audioStream[$n1++] = audioStream::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
