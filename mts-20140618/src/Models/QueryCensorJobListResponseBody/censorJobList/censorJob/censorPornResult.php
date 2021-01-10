<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorPornResult\pornCounterList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorPornResult\pornTopList;
use AlibabaCloud\Tea\Model;

class censorPornResult extends Model
{
    /**
     * @var pornCounterList
     */
    public $pornCounterList;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $averageScore;

    /**
     * @var pornTopList
     */
    public $pornTopList;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $maxScore;
    protected $_name = [
        'pornCounterList' => 'PornCounterList',
        'suggestion'      => 'Suggestion',
        'averageScore'    => 'AverageScore',
        'pornTopList'     => 'PornTopList',
        'label'           => 'Label',
        'maxScore'        => 'MaxScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pornCounterList) {
            $res['PornCounterList'] = null !== $this->pornCounterList ? $this->pornCounterList->toMap() : null;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->averageScore) {
            $res['AverageScore'] = $this->averageScore;
        }
        if (null !== $this->pornTopList) {
            $res['PornTopList'] = null !== $this->pornTopList ? $this->pornTopList->toMap() : null;
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
     * @return censorPornResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PornCounterList'])) {
            $model->pornCounterList = pornCounterList::fromMap($map['PornCounterList']);
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['AverageScore'])) {
            $model->averageScore = $map['AverageScore'];
        }
        if (isset($map['PornTopList'])) {
            $model->pornTopList = pornTopList::fromMap($map['PornTopList']);
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
