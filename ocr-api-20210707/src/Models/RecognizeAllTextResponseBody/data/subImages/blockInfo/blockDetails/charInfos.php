<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\charInfos\charPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails\charInfos\charRect;
use AlibabaCloud\Tea\Model;

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
        'charContent'    => 'CharContent',
        'charId'         => 'CharId',
        'charPoints'     => 'CharPoints',
        'charRect'       => 'CharRect',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['CharPoints'] = [];
            if (null !== $this->charPoints && \is_array($this->charPoints)) {
                $n = 0;
                foreach ($this->charPoints as $item) {
                    $res['CharPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->charRect) {
            $res['CharRect'] = null !== $this->charRect ? $this->charRect->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return charInfos
     */
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
                $n                 = 0;
                foreach ($map['CharPoints'] as $item) {
                    $model->charPoints[$n++] = null !== $item ? charPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CharRect'])) {
            $model->charRect = charRect::fromMap($map['CharRect']);
        }

        return $model;
    }
}
