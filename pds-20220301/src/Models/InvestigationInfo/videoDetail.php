<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\InvestigationInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\InvestigationInfo\videoDetail\blockFrames;

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
        if (\is_array($this->blockFrames)) {
            Model::validateArray($this->blockFrames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockFrames) {
            if (\is_array($this->blockFrames)) {
                $res['block_frames'] = [];
                $n1 = 0;
                foreach ($this->blockFrames as $item1) {
                    $res['block_frames'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['block_frames'])) {
            if (!empty($map['block_frames'])) {
                $model->blockFrames = [];
                $n1 = 0;
                foreach ($map['block_frames'] as $item1) {
                    $model->blockFrames[$n1++] = blockFrames::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
