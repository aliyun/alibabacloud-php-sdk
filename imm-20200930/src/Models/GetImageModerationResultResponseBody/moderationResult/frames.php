<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult;

use AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult\frames\blockFrames;
use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @var blockFrames[]
     */
    public $blockFrames;

    /**
     * @example 30
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'blockFrames' => 'BlockFrames',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockFrames) {
            $res['BlockFrames'] = [];
            if (null !== $this->blockFrames && \is_array($this->blockFrames)) {
                $n = 0;
                foreach ($this->blockFrames as $item) {
                    $res['BlockFrames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BlockFrames'])) {
            if (!empty($map['BlockFrames'])) {
                $model->blockFrames = [];
                $n                  = 0;
                foreach ($map['BlockFrames'] as $item) {
                    $model->blockFrames[$n++] = null !== $item ? blockFrames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
