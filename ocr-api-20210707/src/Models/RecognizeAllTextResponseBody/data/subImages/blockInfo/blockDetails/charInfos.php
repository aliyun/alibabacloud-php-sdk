<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\charInfos\charPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\charInfos\charRect;

class charInfos extends Model
{
    /**
     * @var int
     */
    public $charConfidence;

    /**
     * @var string
     */
    public $charContent;

    /**
     * @var int
     */
    public $charId;

    /**
     * @var charPoints[]
     */
    public $charPoints;

    /**
     * @var charRect
     */
    public $charRect;
    protected $_name = [
        'charConfidence' => 'CharConfidence',
        'charContent' => 'CharContent',
        'charId' => 'CharId',
        'charPoints' => 'CharPoints',
        'charRect' => 'CharRect',
    ];

    public function validate()
    {
        if (\is_array($this->charPoints)) {
            Model::validateArray($this->charPoints);
        }
        if (null !== $this->charRect) {
            $this->charRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charConfidence) {
            $res['CharConfidence'] = $this->charConfidence;
        }

        if (null !== $this->charContent) {
            $res['CharContent'] = $this->charContent;
        }

        if (null !== $this->charId) {
            $res['CharId'] = $this->charId;
        }

        if (null !== $this->charPoints) {
            if (\is_array($this->charPoints)) {
                $res['CharPoints'] = [];
                $n1 = 0;
                foreach ($this->charPoints as $item1) {
                    $res['CharPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->charRect) {
            $res['CharRect'] = null !== $this->charRect ? $this->charRect->toArray($noStream) : $this->charRect;
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
        if (isset($map['CharConfidence'])) {
            $model->charConfidence = $map['CharConfidence'];
        }

        if (isset($map['CharContent'])) {
            $model->charContent = $map['CharContent'];
        }

        if (isset($map['CharId'])) {
            $model->charId = $map['CharId'];
        }

        if (isset($map['CharPoints'])) {
            if (!empty($map['CharPoints'])) {
                $model->charPoints = [];
                $n1 = 0;
                foreach ($map['CharPoints'] as $item1) {
                    $model->charPoints[$n1++] = charPoints::fromMap($item1);
                }
            }
        }

        if (isset($map['CharRect'])) {
            $model->charRect = charRect::fromMap($map['CharRect']);
        }

        return $model;
    }
}
