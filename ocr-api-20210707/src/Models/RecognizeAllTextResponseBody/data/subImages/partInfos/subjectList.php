<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\answerRectList;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\elements;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\figureRectList;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\subjectRectList;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\partInfos\subjectList\tableRectList;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\undefined;
use AlibabaCloud\Tea\Model;

class subjectList extends Model
{
    /**
     * @var undefined[][]
     */
    public $answerPointsList;

    /**
     * @var answerRectList[]
     */
    public $answerRectList;

    /**
     * @var int
     */
    public $confidence;

    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var undefined[][]
     */
    public $figurePointsList;

    /**
     * @var figureRectList[]
     */
    public $figureRectList;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $numChoices;

    /**
     * @var undefined[][]
     */
    public $subjectPointsList;

    /**
     * @var subjectRectList[]
     */
    public $subjectRectList;

    /**
     * @var int
     */
    public $subjectType;

    /**
     * @var undefined[][]
     */
    public $tablePointsList;

    /**
     * @var tableRectList[]
     */
    public $tableRectList;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'answerPointsList'  => 'AnswerPointsList',
        'answerRectList'    => 'AnswerRectList',
        'confidence'        => 'Confidence',
        'elements'          => 'Elements',
        'figurePointsList'  => 'FigurePointsList',
        'figureRectList'    => 'FigureRectList',
        'index'             => 'Index',
        'numChoices'        => 'NumChoices',
        'subjectPointsList' => 'SubjectPointsList',
        'subjectRectList'   => 'SubjectRectList',
        'subjectType'       => 'SubjectType',
        'tablePointsList'   => 'TablePointsList',
        'tableRectList'     => 'TableRectList',
        'text'              => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerPointsList) {
            $res['AnswerPointsList'] = $this->answerPointsList;
        }
        if (null !== $this->answerRectList) {
            $res['AnswerRectList'] = [];
            if (null !== $this->answerRectList && \is_array($this->answerRectList)) {
                $n = 0;
                foreach ($this->answerRectList as $item) {
                    $res['AnswerRectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->figurePointsList) {
            $res['FigurePointsList'] = $this->figurePointsList;
        }
        if (null !== $this->figureRectList) {
            $res['FigureRectList'] = [];
            if (null !== $this->figureRectList && \is_array($this->figureRectList)) {
                $n = 0;
                foreach ($this->figureRectList as $item) {
                    $res['FigureRectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->numChoices) {
            $res['NumChoices'] = $this->numChoices;
        }
        if (null !== $this->subjectPointsList) {
            $res['SubjectPointsList'] = $this->subjectPointsList;
        }
        if (null !== $this->subjectRectList) {
            $res['SubjectRectList'] = [];
            if (null !== $this->subjectRectList && \is_array($this->subjectRectList)) {
                $n = 0;
                foreach ($this->subjectRectList as $item) {
                    $res['SubjectRectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subjectType) {
            $res['SubjectType'] = $this->subjectType;
        }
        if (null !== $this->tablePointsList) {
            $res['TablePointsList'] = $this->tablePointsList;
        }
        if (null !== $this->tableRectList) {
            $res['TableRectList'] = [];
            if (null !== $this->tableRectList && \is_array($this->tableRectList)) {
                $n = 0;
                foreach ($this->tableRectList as $item) {
                    $res['TableRectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerPointsList'])) {
            if (!empty($map['AnswerPointsList'])) {
                $model->answerPointsList = $map['AnswerPointsList'];
            }
        }
        if (isset($map['AnswerRectList'])) {
            if (!empty($map['AnswerRectList'])) {
                $model->answerRectList = [];
                $n                     = 0;
                foreach ($map['AnswerRectList'] as $item) {
                    $model->answerRectList[$n++] = null !== $item ? answerRectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FigurePointsList'])) {
            if (!empty($map['FigurePointsList'])) {
                $model->figurePointsList = $map['FigurePointsList'];
            }
        }
        if (isset($map['FigureRectList'])) {
            if (!empty($map['FigureRectList'])) {
                $model->figureRectList = [];
                $n                     = 0;
                foreach ($map['FigureRectList'] as $item) {
                    $model->figureRectList[$n++] = null !== $item ? figureRectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['NumChoices'])) {
            $model->numChoices = $map['NumChoices'];
        }
        if (isset($map['SubjectPointsList'])) {
            if (!empty($map['SubjectPointsList'])) {
                $model->subjectPointsList = $map['SubjectPointsList'];
            }
        }
        if (isset($map['SubjectRectList'])) {
            if (!empty($map['SubjectRectList'])) {
                $model->subjectRectList = [];
                $n                      = 0;
                foreach ($map['SubjectRectList'] as $item) {
                    $model->subjectRectList[$n++] = null !== $item ? subjectRectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubjectType'])) {
            $model->subjectType = $map['SubjectType'];
        }
        if (isset($map['TablePointsList'])) {
            if (!empty($map['TablePointsList'])) {
                $model->tablePointsList = $map['TablePointsList'];
            }
        }
        if (isset($map['TableRectList'])) {
            if (!empty($map['TableRectList'])) {
                $model->tableRectList = [];
                $n                    = 0;
                foreach ($map['TableRectList'] as $item) {
                    $model->tableRectList[$n++] = null !== $item ? tableRectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
