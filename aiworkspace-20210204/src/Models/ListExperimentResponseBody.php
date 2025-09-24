<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListExperimentResponseBody extends Model
{
    /**
     * @var Experiment[]
     */
    public $experiments;

    /**
     * @var int
     */
    public $nextPageToken;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'experiments' => 'Experiments',
        'nextPageToken' => 'NextPageToken',
        'totalCount' => 'TotalCount',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->experiments)) {
            Model::validateArray($this->experiments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->experiments) {
            if (\is_array($this->experiments)) {
                $res['Experiments'] = [];
                $n1 = 0;
                foreach ($this->experiments as $item1) {
                    $res['Experiments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Experiments'])) {
            if (!empty($map['Experiments'])) {
                $model->experiments = [];
                $n1 = 0;
                foreach ($map['Experiments'] as $item1) {
                    $model->experiments[$n1] = Experiment::fromMap($item1);
                    ++$n1;
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
