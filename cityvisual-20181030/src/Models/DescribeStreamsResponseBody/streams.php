<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeStreamsResponseBody;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeStreamsResponseBody\streams\stream;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stream) {
            $res['Stream'] = [];
            if (null !== $this->stream && \is_array($this->stream)) {
                $n = 0;
                foreach ($this->stream as $item) {
                    $res['Stream'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stream'])) {
            if (!empty($map['Stream'])) {
                $model->stream = [];
                $n             = 0;
                foreach ($map['Stream'] as $item) {
                    $model->stream[$n++] = null !== $item ? stream::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
