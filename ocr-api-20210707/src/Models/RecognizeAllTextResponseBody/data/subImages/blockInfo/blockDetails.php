<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\blockPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\blockRect;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\charInfos;

class blockDetails extends Model
{
    /**
     * @var int
     */
    public $blockAngle;

    /**
     * @var int
     */
    public $blockConfidence;

    /**
     * @var string
     */
    public $blockContent;

    /**
     * @var int
     */
    public $blockId;

    /**
     * @var blockPoints[]
     */
    public $blockPoints;

    /**
     * @var blockRect
     */
    public $blockRect;

    /**
     * @var charInfos[]
     */
    public $charInfos;
    protected $_name = [
        'blockAngle' => 'BlockAngle',
        'blockConfidence' => 'BlockConfidence',
        'blockContent' => 'BlockContent',
        'blockId' => 'BlockId',
        'blockPoints' => 'BlockPoints',
        'blockRect' => 'BlockRect',
        'charInfos' => 'CharInfos',
    ];

    public function validate()
    {
        if (\is_array($this->blockPoints)) {
            Model::validateArray($this->blockPoints);
        }
        if (null !== $this->blockRect) {
            $this->blockRect->validate();
        }
        if (\is_array($this->charInfos)) {
            Model::validateArray($this->charInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockAngle) {
            $res['BlockAngle'] = $this->blockAngle;
        }

        if (null !== $this->blockConfidence) {
            $res['BlockConfidence'] = $this->blockConfidence;
        }

        if (null !== $this->blockContent) {
            $res['BlockContent'] = $this->blockContent;
        }

        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }

        if (null !== $this->blockPoints) {
            if (\is_array($this->blockPoints)) {
                $res['BlockPoints'] = [];
                $n1 = 0;
                foreach ($this->blockPoints as $item1) {
                    $res['BlockPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->blockRect) {
            $res['BlockRect'] = null !== $this->blockRect ? $this->blockRect->toArray($noStream) : $this->blockRect;
        }

        if (null !== $this->charInfos) {
            if (\is_array($this->charInfos)) {
                $res['CharInfos'] = [];
                $n1 = 0;
                foreach ($this->charInfos as $item1) {
                    $res['CharInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BlockAngle'])) {
            $model->blockAngle = $map['BlockAngle'];
        }

        if (isset($map['BlockConfidence'])) {
            $model->blockConfidence = $map['BlockConfidence'];
        }

        if (isset($map['BlockContent'])) {
            $model->blockContent = $map['BlockContent'];
        }

        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }

        if (isset($map['BlockPoints'])) {
            if (!empty($map['BlockPoints'])) {
                $model->blockPoints = [];
                $n1 = 0;
                foreach ($map['BlockPoints'] as $item1) {
                    $model->blockPoints[$n1++] = blockPoints::fromMap($item1);
                }
            }
        }

        if (isset($map['BlockRect'])) {
            $model->blockRect = blockRect::fromMap($map['BlockRect']);
        }

        if (isset($map['CharInfos'])) {
            if (!empty($map['CharInfos'])) {
                $model->charInfos = [];
                $n1 = 0;
                foreach ($map['CharInfos'] as $item1) {
                    $model->charInfos[$n1++] = charInfos::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
