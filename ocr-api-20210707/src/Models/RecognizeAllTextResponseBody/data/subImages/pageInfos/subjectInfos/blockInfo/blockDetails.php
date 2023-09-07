<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo\blockDetails\blockPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo\blockDetails\blockRect;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo\blockDetails\charInfo;
use AlibabaCloud\Tea\Model;

class blockDetails extends Model
{
    /**
     * @var int
     */
    public $angle;

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
     * @var charInfo[]
     */
    public $charInfo;

    /**
     * @var int
     */
    public $confidence;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'angle'       => 'Angle',
        'blockId'     => 'BlockId',
        'blockPoints' => 'BlockPoints',
        'blockRect'   => 'BlockRect',
        'charInfo'    => 'CharInfo',
        'confidence'  => 'Confidence',
        'content'     => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }
        if (null !== $this->blockPoints) {
            $res['BlockPoints'] = [];
            if (null !== $this->blockPoints && \is_array($this->blockPoints)) {
                $n = 0;
                foreach ($this->blockPoints as $item) {
                    $res['BlockPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->blockRect) {
            $res['BlockRect'] = null !== $this->blockRect ? $this->blockRect->toMap() : null;
        }
        if (null !== $this->charInfo) {
            $res['CharInfo'] = [];
            if (null !== $this->charInfo && \is_array($this->charInfo)) {
                $n = 0;
                foreach ($this->charInfo as $item) {
                    $res['CharInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }
        if (isset($map['BlockPoints'])) {
            if (!empty($map['BlockPoints'])) {
                $model->blockPoints = [];
                $n                  = 0;
                foreach ($map['BlockPoints'] as $item) {
                    $model->blockPoints[$n++] = null !== $item ? blockPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BlockRect'])) {
            $model->blockRect = blockRect::fromMap($map['BlockRect']);
        }
        if (isset($map['CharInfo'])) {
            if (!empty($map['CharInfo'])) {
                $model->charInfo = [];
                $n               = 0;
                foreach ($map['CharInfo'] as $item) {
                    $model->charInfo[$n++] = null !== $item ? charInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
