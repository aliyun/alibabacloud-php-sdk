<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\elements;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\elements\contents\contentPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\elements\contents\contentRect;
use AlibabaCloud\Tea\Model;

class contents extends Model
{
    /**
     * @var int
     */
    public $confidence;

    /**
     * @var contentPoints[]
     */
    public $contentPoints;

    /**
     * @var contentRect
     */
    public $contentRect;

    /**
     * @var int
     */
    public $contentType;

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'confidence'    => 'Confidence',
        'contentPoints' => 'ContentPoints',
        'contentRect'   => 'ContentRect',
        'contentType'   => 'ContentType',
        'option'        => 'Option',
        'text'          => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->contentPoints) {
            $res['ContentPoints'] = [];
            if (null !== $this->contentPoints && \is_array($this->contentPoints)) {
                $n = 0;
                foreach ($this->contentPoints as $item) {
                    $res['ContentPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contentRect) {
            $res['ContentRect'] = null !== $this->contentRect ? $this->contentRect->toMap() : null;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['ContentPoints'])) {
            if (!empty($map['ContentPoints'])) {
                $model->contentPoints = [];
                $n                    = 0;
                foreach ($map['ContentPoints'] as $item) {
                    $model->contentPoints[$n++] = null !== $item ? contentPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContentRect'])) {
            $model->contentRect = contentRect::fromMap($map['ContentRect']);
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
