<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewsResponseBody\featureViews;

class ListFeatureViewsResponseBody extends Model
{
    /**
     * @var featureViews[]
     */
    public $featureViews;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'featureViews' => 'FeatureViews',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->featureViews)) {
            Model::validateArray($this->featureViews);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureViews) {
            if (\is_array($this->featureViews)) {
                $res['FeatureViews'] = [];
                $n1 = 0;
                foreach ($this->featureViews as $item1) {
                    $res['FeatureViews'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['FeatureViews'])) {
            if (!empty($map['FeatureViews'])) {
                $model->featureViews = [];
                $n1 = 0;
                foreach ($map['FeatureViews'] as $item1) {
                    $model->featureViews[$n1] = featureViews::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
