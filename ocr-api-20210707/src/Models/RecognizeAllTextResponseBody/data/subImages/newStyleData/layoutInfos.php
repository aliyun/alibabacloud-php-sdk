<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData\layoutInfos\layoutPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\newStyleData\layoutInfos\layoutRect;
use AlibabaCloud\Tea\Model;

class layoutInfos extends Model
{
    /**
     * @var string
     */
    public $alignment;

    /**
     * @var int
     */
    public $index;

    /**
     * @var layoutPoints[]
     */
    public $layoutPoints;

    /**
     * @var layoutRect
     */
    public $layoutRect;

    /**
     * @var int[]
     */
    public $pageNum;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uniqueID;
    protected $_name = [
        'alignment'    => 'Alignment',
        'index'        => 'Index',
        'layoutPoints' => 'LayoutPoints',
        'layoutRect'   => 'LayoutRect',
        'pageNum'      => 'PageNum',
        'source'       => 'Source',
        'subType'      => 'SubType',
        'text'         => 'Text',
        'type'         => 'Type',
        'uniqueID'     => 'UniqueID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alignment) {
            $res['Alignment'] = $this->alignment;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->layoutPoints) {
            $res['LayoutPoints'] = [];
            if (null !== $this->layoutPoints && \is_array($this->layoutPoints)) {
                $n = 0;
                foreach ($this->layoutPoints as $item) {
                    $res['LayoutPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->layoutRect) {
            $res['LayoutRect'] = null !== $this->layoutRect ? $this->layoutRect->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uniqueID) {
            $res['UniqueID'] = $this->uniqueID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layoutInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alignment'])) {
            $model->alignment = $map['Alignment'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['LayoutPoints'])) {
            if (!empty($map['LayoutPoints'])) {
                $model->layoutPoints = [];
                $n                   = 0;
                foreach ($map['LayoutPoints'] as $item) {
                    $model->layoutPoints[$n++] = null !== $item ? layoutPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LayoutRect'])) {
            $model->layoutRect = layoutRect::fromMap($map['LayoutRect']);
        }
        if (isset($map['PageNum'])) {
            if (!empty($map['PageNum'])) {
                $model->pageNum = $map['PageNum'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UniqueID'])) {
            $model->uniqueID = $map['UniqueID'];
        }

        return $model;
    }
}
