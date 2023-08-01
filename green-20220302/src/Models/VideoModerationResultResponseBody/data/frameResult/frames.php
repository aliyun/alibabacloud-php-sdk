<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;
use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @example 338
     *
     * @var float
     */
    public $offset;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @example http://xxxx.abc.jpg
     *
     * @var string
     */
    public $tempUrl;
    protected $_name = [
        'offset'  => 'Offset',
        'results' => 'Results',
        'tempUrl' => 'TempUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tempUrl) {
            $res['TempUrl'] = $this->tempUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TempUrl'])) {
            $model->tempUrl = $map['TempUrl'];
        }

        return $model;
    }
}
