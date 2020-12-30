<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData\transcodeDataItem;
use AlibabaCloud\Tea\Model;

class transcodeData extends Model
{
    /**
     * @var transcodeDataItem[]
     */
    public $transcodeDataItem;
    protected $_name = [
        'transcodeDataItem' => 'TranscodeDataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeDataItem) {
            $res['TranscodeDataItem'] = [];
            if (null !== $this->transcodeDataItem && \is_array($this->transcodeDataItem)) {
                $n = 0;
                foreach ($this->transcodeDataItem as $item) {
                    $res['TranscodeDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeDataItem'])) {
            if (!empty($map['TranscodeDataItem'])) {
                $model->transcodeDataItem = [];
                $n                        = 0;
                foreach ($map['TranscodeDataItem'] as $item) {
                    $model->transcodeDataItem[$n++] = null !== $item ? transcodeDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
