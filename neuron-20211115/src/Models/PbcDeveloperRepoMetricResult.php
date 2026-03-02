<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcDeveloperRepoMetricResult extends Model
{
    /**
     * @var ReposDeveloperGroupMetric[]
     */
    public $developerRepoMetrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'developerRepoMetrics' => 'developerRepoMetrics',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->developerRepoMetrics)) {
            Model::validateArray($this->developerRepoMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->developerRepoMetrics) {
            if (\is_array($this->developerRepoMetrics)) {
                $res['developerRepoMetrics'] = [];
                $n1 = 0;
                foreach ($this->developerRepoMetrics as $item1) {
                    $res['developerRepoMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['developerRepoMetrics'])) {
            if (!empty($map['developerRepoMetrics'])) {
                $model->developerRepoMetrics = [];
                $n1 = 0;
                foreach ($map['developerRepoMetrics'] as $item1) {
                    $model->developerRepoMetrics[$n1] = ReposDeveloperGroupMetric::fromMap($item1);
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
