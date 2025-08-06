<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodTranscodeDataResponseBody\transcodeData\transcodeDataItem;

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
        if (\is_array($this->transcodeDataItem)) {
            Model::validateArray($this->transcodeDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transcodeDataItem) {
            if (\is_array($this->transcodeDataItem)) {
                $res['TranscodeDataItem'] = [];
                $n1 = 0;
                foreach ($this->transcodeDataItem as $item1) {
                    $res['TranscodeDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TranscodeDataItem'])) {
            if (!empty($map['TranscodeDataItem'])) {
                $model->transcodeDataItem = [];
                $n1 = 0;
                foreach ($map['TranscodeDataItem'] as $item1) {
                    $model->transcodeDataItem[$n1] = transcodeDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
