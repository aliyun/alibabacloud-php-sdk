<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\StartPlaylistResponseBody\streamInfo\streams\stream;

class streams extends Model
{
    /**
     * @var stream[]
     */
    public $stream;
    protected $_name = [
        'stream' => 'Stream',
    ];

    public function validate()
    {
        if (\is_array($this->stream)) {
            Model::validateArray($this->stream);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stream) {
            if (\is_array($this->stream)) {
                $res['Stream'] = [];
                $n1 = 0;
                foreach ($this->stream as $item1) {
                    $res['Stream'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Stream'])) {
            if (!empty($map['Stream'])) {
                $model->stream = [];
                $n1 = 0;
                foreach ($map['Stream'] as $item1) {
                    $model->stream[$n1] = stream::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
