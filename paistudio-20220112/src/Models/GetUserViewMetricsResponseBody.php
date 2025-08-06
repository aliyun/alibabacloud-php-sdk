<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class GetUserViewMetricsResponseBody extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var UserViewMetric
     */
    public $summary;

    /**
     * @var int
     */
    public $total;

    /**
     * @var UserViewMetric[]
     */
    public $userMetrics;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'summary' => 'Summary',
        'total' => 'Total',
        'userMetrics' => 'UserMetrics',
    ];

    public function validate()
    {
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        if (\is_array($this->userMetrics)) {
            Model::validateArray($this->userMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->userMetrics) {
            if (\is_array($this->userMetrics)) {
                $res['UserMetrics'] = [];
                $n1 = 0;
                foreach ($this->userMetrics as $item1) {
                    $res['UserMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Summary'])) {
            $model->summary = UserViewMetric::fromMap($map['Summary']);
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['UserMetrics'])) {
            if (!empty($map['UserMetrics'])) {
                $model->userMetrics = [];
                $n1 = 0;
                foreach ($map['UserMetrics'] as $item1) {
                    $model->userMetrics[$n1] = UserViewMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
