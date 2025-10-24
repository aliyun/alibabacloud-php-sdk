<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\mediaInfo\streams;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaListByURLResponseBody\mediaList\media\mediaInfo\streams\subtitleStreamList\subtitleStream;

class subtitleStreamList extends Model
{
    /**
     * @var subtitleStream[]
     */
    public $subtitleStream;
    protected $_name = [
        'subtitleStream' => 'SubtitleStream',
    ];

    public function validate()
    {
        if (\is_array($this->subtitleStream)) {
            Model::validateArray($this->subtitleStream);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subtitleStream) {
            if (\is_array($this->subtitleStream)) {
                $res['SubtitleStream'] = [];
                $n1 = 0;
                foreach ($this->subtitleStream as $item1) {
                    $res['SubtitleStream'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SubtitleStream'])) {
            if (!empty($map['SubtitleStream'])) {
                $model->subtitleStream = [];
                $n1 = 0;
                foreach ($map['SubtitleStream'] as $item1) {
                    $model->subtitleStream[$n1] = subtitleStream::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
