<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\GetImageModerationResultResponseBody\moderationResult\frames\blockFrames;

class frames extends Model
{
    /**
     * @var blockFrames[]
     */
    public $blockFrames;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'blockFrames' => 'BlockFrames',
        'totalCount' => 'TotalCount',
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
                $res['BlockFrames'] = [];
                $n1 = 0;
                foreach ($this->blockFrames as $item1) {
                    $res['BlockFrames'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BlockFrames'])) {
            if (!empty($map['BlockFrames'])) {
                $model->blockFrames = [];
                $n1 = 0;
                foreach ($map['BlockFrames'] as $item1) {
                    $model->blockFrames[$n1++] = blockFrames::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
