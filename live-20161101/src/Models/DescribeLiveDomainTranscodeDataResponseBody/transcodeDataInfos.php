<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTranscodeDataResponseBody\transcodeDataInfos\transcodeDataInfo;
use AlibabaCloud\Tea\Model;

class transcodeDataInfos extends Model
{
    /**
     * @var transcodeDataInfo[]
     */
    public $transcodeDataInfo;
    protected $_name = [
        'transcodeDataInfo' => 'TranscodeDataInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->transcodeDataInfo) {
            $res['TranscodeDataInfo'] = [];
            if (null !== $this->transcodeDataInfo && \is_array($this->transcodeDataInfo)) {
                $n = 0;
                foreach ($this->transcodeDataInfo as $item) {
                    $res['TranscodeDataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeDataInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TranscodeDataInfo'])) {
            if (!empty($map['TranscodeDataInfo'])) {
                $model->transcodeDataInfo = [];
                $n                        = 0;
                foreach ($map['TranscodeDataInfo'] as $item) {
                    $model->transcodeDataInfo[$n++] = null !== $item ? transcodeDataInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
