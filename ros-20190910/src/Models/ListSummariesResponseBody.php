<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesResponseBody\centerSummary;
use AlibabaCloud\SDK\ROS\V20190910\Models\ListSummariesResponseBody\regionSummaries;

class ListSummariesResponseBody extends Model
{
    /**
     * @var centerSummary
     */
    public $centerSummary;

    /**
     * @var regionSummaries[]
     */
    public $regionSummaries;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'centerSummary' => 'CenterSummary',
        'regionSummaries' => 'RegionSummaries',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->centerSummary) {
            $this->centerSummary->validate();
        }
        if (\is_array($this->regionSummaries)) {
            Model::validateArray($this->regionSummaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->centerSummary) {
            $res['CenterSummary'] = null !== $this->centerSummary ? $this->centerSummary->toArray($noStream) : $this->centerSummary;
        }

        if (null !== $this->regionSummaries) {
            if (\is_array($this->regionSummaries)) {
                $res['RegionSummaries'] = [];
                $n1 = 0;
                foreach ($this->regionSummaries as $item1) {
                    $res['RegionSummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CenterSummary'])) {
            $model->centerSummary = centerSummary::fromMap($map['CenterSummary']);
        }

        if (isset($map['RegionSummaries'])) {
            if (!empty($map['RegionSummaries'])) {
                $model->regionSummaries = [];
                $n1 = 0;
                foreach ($map['RegionSummaries'] as $item1) {
                    $model->regionSummaries[$n1] = regionSummaries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
