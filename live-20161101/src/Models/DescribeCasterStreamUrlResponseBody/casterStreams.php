<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams\casterStream;
use AlibabaCloud\Tea\Model;

class casterStreams extends Model
{
    /**
     * @var casterStream[]
     */
    public $casterStream;
    protected $_name = [
        'casterStream' => 'CasterStream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterStream) {
            $res['CasterStream'] = [];
            if (null !== $this->casterStream && \is_array($this->casterStream)) {
                $n = 0;
                foreach ($this->casterStream as $item) {
                    $res['CasterStream'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return casterStreams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterStream'])) {
            if (!empty($map['CasterStream'])) {
                $model->casterStream = [];
                $n                   = 0;
                foreach ($map['CasterStream'] as $item) {
                    $model->casterStream[$n++] = null !== $item ? casterStream::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
