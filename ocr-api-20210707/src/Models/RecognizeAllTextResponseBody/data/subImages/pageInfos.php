<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\pageInfos\subjectInfos;
use AlibabaCloud\Tea\Model;

class pageInfos extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var int
     */
    public $docIndex;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $pageId;

    /**
     * @var subjectInfos[]
     */
    public $subjectInfos;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'angle'        => 'Angle',
        'docIndex'     => 'DocIndex',
        'height'       => 'Height',
        'pageId'       => 'PageId',
        'subjectInfos' => 'SubjectInfos',
        'width'        => 'Width',
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
        if (null !== $this->docIndex) {
            $res['DocIndex'] = $this->docIndex;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
        }
        if (null !== $this->subjectInfos) {
            $res['SubjectInfos'] = [];
            if (null !== $this->subjectInfos && \is_array($this->subjectInfos)) {
                $n = 0;
                foreach ($this->subjectInfos as $item) {
                    $res['SubjectInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['DocIndex'])) {
            $model->docIndex = $map['DocIndex'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
        }
        if (isset($map['SubjectInfos'])) {
            if (!empty($map['SubjectInfos'])) {
                $model->subjectInfos = [];
                $n                   = 0;
                foreach ($map['SubjectInfos'] as $item) {
                    $model->subjectInfos[$n++] = null !== $item ? subjectInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
