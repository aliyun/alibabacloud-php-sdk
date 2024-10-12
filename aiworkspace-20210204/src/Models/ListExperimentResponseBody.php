<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListExperimentResponseBody extends Model
{
    /**
     * @var Experiment[]
     */
    public $experiments;

    /**
     * @example 0
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 0C6835C5-A424-5AFB-ACC2-F1E3CA1ABF7C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'experiments'   => 'Experiments',
        'nextPageToken' => 'NextPageToken',
        'totalCount'    => 'TotalCount',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experiments) {
            $res['Experiments'] = [];
            if (null !== $this->experiments && \is_array($this->experiments)) {
                $n = 0;
                foreach ($this->experiments as $item) {
                    $res['Experiments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExperimentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Experiments'])) {
            if (!empty($map['Experiments'])) {
                $model->experiments = [];
                $n                  = 0;
                foreach ($map['Experiments'] as $item) {
                    $model->experiments[$n++] = null !== $item ? Experiment::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
