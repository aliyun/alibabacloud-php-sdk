<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\contentInfos\contentPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos\contentInfos\contentRect;
use AlibabaCloud\Tea\Model;

class contentInfos extends Model
{
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
    public $docIndex;
    protected $_name = [
        'contentPoints' => 'ContentPoints',
        'contentRect'   => 'ContentRect',
        'docIndex'      => 'DocIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->docIndex) {
            $res['DocIndex'] = $this->docIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['DocIndex'])) {
            $model->docIndex = $map['DocIndex'];
        }

        return $model;
    }
}
