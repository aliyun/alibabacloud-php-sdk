<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion\instanceSeriesList;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeRegionsResponseBody\drdsRegions\drdsRegion\instanceSeriesList\instanceSeries\specList;
use AlibabaCloud\Tea\Model;

class instanceSeries extends Model
{
    /**
     * @var string
     */
    public $seriesId;

    /**
     * @var string
     */
    public $seriesName;

    /**
     * @var specList
     */
    public $specList;
    protected $_name = [
        'seriesId'   => 'SeriesId',
        'seriesName' => 'SeriesName',
        'specList'   => 'SpecList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seriesId) {
            $res['SeriesId'] = $this->seriesId;
        }
        if (null !== $this->seriesName) {
            $res['SeriesName'] = $this->seriesName;
        }
        if (null !== $this->specList) {
            $res['SpecList'] = null !== $this->specList ? $this->specList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSeries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeriesId'])) {
            $model->seriesId = $map['SeriesId'];
        }
        if (isset($map['SeriesName'])) {
            $model->seriesName = $map['SeriesName'];
        }
        if (isset($map['SpecList'])) {
            $model->specList = specList::fromMap($map['SpecList']);
        }

        return $model;
    }
}
