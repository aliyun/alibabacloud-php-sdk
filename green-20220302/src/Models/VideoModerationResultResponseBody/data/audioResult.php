<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult\audioSummarys;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult\sliceDetails;
use AlibabaCloud\Tea\Model;

class audioResult extends Model
{
    /**
     * @var audioSummarys[]
     */
    public $audioSummarys;

    /**
     * @var sliceDetails[]
     */
    public $sliceDetails;
    protected $_name = [
        'audioSummarys' => 'AudioSummarys',
        'sliceDetails'  => 'SliceDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSummarys) {
            $res['AudioSummarys'] = [];
            if (null !== $this->audioSummarys && \is_array($this->audioSummarys)) {
                $n = 0;
                foreach ($this->audioSummarys as $item) {
                    $res['AudioSummarys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sliceDetails) {
            $res['SliceDetails'] = [];
            if (null !== $this->sliceDetails && \is_array($this->sliceDetails)) {
                $n = 0;
                foreach ($this->sliceDetails as $item) {
                    $res['SliceDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSummarys'])) {
            if (!empty($map['AudioSummarys'])) {
                $model->audioSummarys = [];
                $n                    = 0;
                foreach ($map['AudioSummarys'] as $item) {
                    $model->audioSummarys[$n++] = null !== $item ? audioSummarys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SliceDetails'])) {
            if (!empty($map['SliceDetails'])) {
                $model->sliceDetails = [];
                $n                   = 0;
                foreach ($map['SliceDetails'] as $item) {
                    $model->sliceDetails[$n++] = null !== $item ? sliceDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
