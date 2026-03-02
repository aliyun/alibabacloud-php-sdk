<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcRepoMetricResult extends Model
{
    /**
     * @var RepoMetric[]
     */
    public $repoMetrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'repoMetrics' => 'repoMetrics',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->repoMetrics)) {
            Model::validateArray($this->repoMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repoMetrics) {
            if (\is_array($this->repoMetrics)) {
                $res['repoMetrics'] = [];
                $n1 = 0;
                foreach ($this->repoMetrics as $item1) {
                    $res['repoMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['repoMetrics'])) {
            if (!empty($map['repoMetrics'])) {
                $model->repoMetrics = [];
                $n1 = 0;
                foreach ($map['repoMetrics'] as $item1) {
                    $model->repoMetrics[$n1] = RepoMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
