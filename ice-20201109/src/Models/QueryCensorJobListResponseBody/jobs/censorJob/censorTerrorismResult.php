<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\censorTerrorismResult\terrorismCounterList;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\censorTerrorismResult\terrorismTopList;
use AlibabaCloud\Tea\Model;

class censorTerrorismResult extends Model
{
    /**
     * @var string
     */
    public $averageScore;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $maxScore;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var terrorismCounterList
     */
    public $terrorismCounterList;

    /**
     * @var terrorismTopList
     */
    public $terrorismTopList;
    protected $_name = [
        'averageScore'         => 'AverageScore',
        'label'                => 'Label',
        'maxScore'             => 'MaxScore',
        'suggestion'           => 'Suggestion',
        'terrorismCounterList' => 'TerrorismCounterList',
        'terrorismTopList'     => 'TerrorismTopList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageScore) {
            $res['AverageScore'] = $this->averageScore;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->maxScore) {
            $res['MaxScore'] = $this->maxScore;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->terrorismCounterList) {
            $res['TerrorismCounterList'] = null !== $this->terrorismCounterList ? $this->terrorismCounterList->toMap() : null;
        }
        if (null !== $this->terrorismTopList) {
            $res['TerrorismTopList'] = null !== $this->terrorismTopList ? $this->terrorismTopList->toMap() : null;
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
        if (isset($map['AverageScore'])) {
            $model->averageScore = $map['AverageScore'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['MaxScore'])) {
            $model->maxScore = $map['MaxScore'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TerrorismCounterList'])) {
            $model->terrorismCounterList = terrorismCounterList::fromMap($map['TerrorismCounterList']);
        }
        if (isset($map['TerrorismTopList'])) {
            $model->terrorismTopList = terrorismTopList::fromMap($map['TerrorismTopList']);
        }

        return $model;
    }
}
