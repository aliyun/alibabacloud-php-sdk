<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainStreamTranscodeDataResponseBody\transcodeDataList\transcodeData;
use AlibabaCloud\Tea\Model;

class transcodeDataList extends Model
{
    /**
     * @var transcodeData[]
     */
    public $transcodeData;
    protected $_name = [
        'transcodeData' => 'TranscodeData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeData) {
            $res['TranscodeData'] = [];
            if (null !== $this->transcodeData && \is_array($this->transcodeData)) {
                $n = 0;
                foreach ($this->transcodeData as $item) {
                    $res['TranscodeData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeData'])) {
            if (!empty($map['TranscodeData'])) {
                $model->transcodeData = [];
                $n                    = 0;
                foreach ($map['TranscodeData'] as $item) {
                    $model->transcodeData[$n++] = null !== $item ? transcodeData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
