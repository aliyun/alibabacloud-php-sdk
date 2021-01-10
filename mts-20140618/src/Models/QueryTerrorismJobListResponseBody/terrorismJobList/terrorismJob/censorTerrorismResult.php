<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\censorTerrorismResult\terrorismCounterList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\censorTerrorismResult\terrorismTopList;
use AlibabaCloud\Tea\Model;

class censorTerrorismResult extends Model
{
    /**
     * @var terrorismTopList
     */
    public $terrorismTopList;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $averageScore;

    /**
     * @var terrorismCounterList
     */
    public $terrorismCounterList;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $maxScore;
    protected $_name = [
        'terrorismTopList'     => 'TerrorismTopList',
        'suggestion'           => 'Suggestion',
        'averageScore'         => 'AverageScore',
        'terrorismCounterList' => 'TerrorismCounterList',
        'label'                => 'Label',
        'maxScore'             => 'MaxScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismTopList) {
            $res['TerrorismTopList'] = null !== $this->terrorismTopList ? $this->terrorismTopList->toMap() : null;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->averageScore) {
            $res['AverageScore'] = $this->averageScore;
        }
        if (null !== $this->terrorismCounterList) {
            $res['TerrorismCounterList'] = null !== $this->terrorismCounterList ? $this->terrorismCounterList->toMap() : null;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->maxScore) {
            $res['MaxScore'] = $this->maxScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return censorTerrorismResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismTopList'])) {
            $model->terrorismTopList = terrorismTopList::fromMap($map['TerrorismTopList']);
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['AverageScore'])) {
            $model->averageScore = $map['AverageScore'];
        }
        if (isset($map['TerrorismCounterList'])) {
            $model->terrorismCounterList = terrorismCounterList::fromMap($map['TerrorismCounterList']);
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['MaxScore'])) {
            $model->maxScore = $map['MaxScore'];
        }

        return $model;
    }
}
