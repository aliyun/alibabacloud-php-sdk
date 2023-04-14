<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\InvestigationInfo;

use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigationInfo\videoDetail\blockFrames;
use AlibabaCloud\Tea\Model;

class videoDetail extends Model
{
    /**
     * @var blockFrames[]
     */
    public $blockFrames;
    protected $_name = [
        'blockFrames' => 'block_frames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockFrames) {
            $res['block_frames'] = [];
            if (null !== $this->blockFrames && \is_array($this->blockFrames)) {
                $n = 0;
                foreach ($this->blockFrames as $item) {
                    $res['block_frames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['block_frames'])) {
            if (!empty($map['block_frames'])) {
                $model->blockFrames = [];
                $n                  = 0;
                foreach ($map['block_frames'] as $item) {
                    $model->blockFrames[$n++] = null !== $item ? blockFrames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
