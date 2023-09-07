<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\elements\contents;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\elements\elementRectList;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\undefined;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var contents[]
     */
    public $contents;

    /**
     * @var undefined[][]
     */
    public $elementPointsList;

    /**
     * @var elementRectList[]
     */
    public $elementRectList;

    /**
     * @var int
     */
    public $elementType;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'contents'          => 'Contents',
        'elementPointsList' => 'ElementPointsList',
        'elementRectList'   => 'ElementRectList',
        'elementType'       => 'ElementType',
        'text'              => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['Contents'] = [];
            if (null !== $this->contents && \is_array($this->contents)) {
                $n = 0;
                foreach ($this->contents as $item) {
                    $res['Contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->elementPointsList) {
            $res['ElementPointsList'] = $this->elementPointsList;
        }
        if (null !== $this->elementRectList) {
            $res['ElementRectList'] = [];
            if (null !== $this->elementRectList && \is_array($this->elementRectList)) {
                $n = 0;
                foreach ($this->elementRectList as $item) {
                    $res['ElementRectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->elementType) {
            $res['ElementType'] = $this->elementType;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = [];
                $n               = 0;
                foreach ($map['Contents'] as $item) {
                    $model->contents[$n++] = null !== $item ? contents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ElementPointsList'])) {
            if (!empty($map['ElementPointsList'])) {
                $model->elementPointsList = $map['ElementPointsList'];
            }
        }
        if (isset($map['ElementRectList'])) {
            if (!empty($map['ElementRectList'])) {
                $model->elementRectList = [];
                $n                      = 0;
                foreach ($map['ElementRectList'] as $item) {
                    $model->elementRectList[$n++] = null !== $item ? elementRectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ElementType'])) {
            $model->elementType = $map['ElementType'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
