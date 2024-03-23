<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data\coldData;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data\dataGrowth;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data\hotData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var coldData
     */
    public $coldData;

    /**
     * @var dataGrowth
     */
    public $dataGrowth;

    /**
     * @var hotData
     */
    public $hotData;

    /**
     * @example 8388608
     *
     * @var string
     */
    public $totalSize;
    protected $_name = [
        'coldData'   => 'ColdData',
        'dataGrowth' => 'DataGrowth',
        'hotData'    => 'HotData',
        'totalSize'  => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldData) {
            $res['ColdData'] = null !== $this->coldData ? $this->coldData->toMap() : null;
        }
        if (null !== $this->dataGrowth) {
            $res['DataGrowth'] = null !== $this->dataGrowth ? $this->dataGrowth->toMap() : null;
        }
        if (null !== $this->hotData) {
            $res['HotData'] = null !== $this->hotData ? $this->hotData->toMap() : null;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdData'])) {
            $model->coldData = coldData::fromMap($map['ColdData']);
        }
        if (isset($map['DataGrowth'])) {
            $model->dataGrowth = dataGrowth::fromMap($map['DataGrowth']);
        }
        if (isset($map['HotData'])) {
            $model->hotData = hotData::fromMap($map['HotData']);
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
