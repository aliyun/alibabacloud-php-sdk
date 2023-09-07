<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData\docInfo;

use AlibabaCloud\Tea\Model;

class pages extends Model
{
    /**
     * @var int
     */
    public $imageWidth;

    /**
     * @var int
     */
    public $inageHeight;

    /**
     * @var int
     */
    public $pageIdAllDocs;

    /**
     * @var int
     */
    public $pageIdCurDoc;
    protected $_name = [
        'imageWidth'    => 'ImageWidth',
        'inageHeight'   => 'InageHeight',
        'pageIdAllDocs' => 'PageIdAllDocs',
        'pageIdCurDoc'  => 'PageIdCurDoc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }
        if (null !== $this->inageHeight) {
            $res['InageHeight'] = $this->inageHeight;
        }
        if (null !== $this->pageIdAllDocs) {
            $res['PageIdAllDocs'] = $this->pageIdAllDocs;
        }
        if (null !== $this->pageIdCurDoc) {
            $res['PageIdCurDoc'] = $this->pageIdCurDoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }
        if (isset($map['InageHeight'])) {
            $model->inageHeight = $map['InageHeight'];
        }
        if (isset($map['PageIdAllDocs'])) {
            $model->pageIdAllDocs = $map['PageIdAllDocs'];
        }
        if (isset($map['PageIdCurDoc'])) {
            $model->pageIdCurDoc = $map['PageIdCurDoc'];
        }

        return $model;
    }
}
