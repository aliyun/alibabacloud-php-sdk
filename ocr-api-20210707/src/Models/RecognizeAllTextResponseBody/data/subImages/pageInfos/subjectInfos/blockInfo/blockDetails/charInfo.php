<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo\blockDetails;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo\blockDetails\charInfo\charPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\blockInfo\blockDetails\charInfo\charRect;
use AlibabaCloud\Tea\Model;

class charInfo extends Model
{
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

    /**
     * @var int
     */
    public $confidence;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'charId'     => 'CharId',
        'charPoints' => 'CharPoints',
        'charRect'   => 'CharRect',
        'confidence' => 'Confidence',
        'content'    => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return charInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
