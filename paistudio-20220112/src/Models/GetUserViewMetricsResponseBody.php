<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
        'summary'         => 'Summary',
        'total'           => 'Total',
        'userMetrics'     => 'UserMetrics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->userMetrics) {
            $res['UserMetrics'] = [];
            if (null !== $this->userMetrics && \is_array($this->userMetrics)) {
                $n = 0;
                foreach ($this->userMetrics as $item) {
                    $res['UserMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserViewMetricsResponseBody
     */
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
                $n                  = 0;
                foreach ($map['UserMetrics'] as $item) {
                    $model->userMetrics[$n++] = null !== $item ? UserViewMetric::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
