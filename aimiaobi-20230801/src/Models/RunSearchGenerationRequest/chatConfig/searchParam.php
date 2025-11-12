<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationRequest\chatConfig\searchParam\searchSources;

class searchParam extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $multimodalSearchTypes;

    /**
     * @var float
     */
    public $searchAudioMinScore;

    /**
     * @var float
     */
    public $searchImageMinScore;

    /**
     * @var searchSources[]
     */
    public $searchSources;

    /**
     * @var float
     */
    public $searchTextMinScore;

    /**
     * @var float
     */
    public $searchVideoMinScore;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'multimodalSearchTypes' => 'MultimodalSearchTypes',
        'searchAudioMinScore' => 'SearchAudioMinScore',
        'searchImageMinScore' => 'SearchImageMinScore',
        'searchSources' => 'SearchSources',
        'searchTextMinScore' => 'SearchTextMinScore',
        'searchVideoMinScore' => 'SearchVideoMinScore',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->multimodalSearchTypes)) {
            Model::validateArray($this->multimodalSearchTypes);
        }
        if (\is_array($this->searchSources)) {
            Model::validateArray($this->searchSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->multimodalSearchTypes) {
            if (\is_array($this->multimodalSearchTypes)) {
                $res['MultimodalSearchTypes'] = [];
                $n1 = 0;
                foreach ($this->multimodalSearchTypes as $item1) {
                    $res['MultimodalSearchTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchAudioMinScore) {
            $res['SearchAudioMinScore'] = $this->searchAudioMinScore;
        }

        if (null !== $this->searchImageMinScore) {
            $res['SearchImageMinScore'] = $this->searchImageMinScore;
        }

        if (null !== $this->searchSources) {
            if (\is_array($this->searchSources)) {
                $res['SearchSources'] = [];
                $n1 = 0;
                foreach ($this->searchSources as $item1) {
                    $res['SearchSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchTextMinScore) {
            $res['SearchTextMinScore'] = $this->searchTextMinScore;
        }

        if (null !== $this->searchVideoMinScore) {
            $res['SearchVideoMinScore'] = $this->searchVideoMinScore;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MultimodalSearchTypes'])) {
            if (!empty($map['MultimodalSearchTypes'])) {
                $model->multimodalSearchTypes = [];
                $n1 = 0;
                foreach ($map['MultimodalSearchTypes'] as $item1) {
                    $model->multimodalSearchTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchAudioMinScore'])) {
            $model->searchAudioMinScore = $map['SearchAudioMinScore'];
        }

        if (isset($map['SearchImageMinScore'])) {
            $model->searchImageMinScore = $map['SearchImageMinScore'];
        }

        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n1 = 0;
                foreach ($map['SearchSources'] as $item1) {
                    $model->searchSources[$n1] = searchSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchTextMinScore'])) {
            $model->searchTextMinScore = $map['SearchTextMinScore'];
        }

        if (isset($map['SearchVideoMinScore'])) {
            $model->searchVideoMinScore = $map['SearchVideoMinScore'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
