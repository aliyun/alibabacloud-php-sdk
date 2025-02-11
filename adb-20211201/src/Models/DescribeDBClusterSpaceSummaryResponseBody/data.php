<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data\coldData;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data\dataGrowth;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data\hotData;

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
        if (null !== $this->coldData) {
            $this->coldData->validate();
        }
        if (null !== $this->dataGrowth) {
            $this->dataGrowth->validate();
        }
        if (null !== $this->hotData) {
            $this->hotData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldData) {
            $res['ColdData'] = null !== $this->coldData ? $this->coldData->toArray($noStream) : $this->coldData;
        }

        if (null !== $this->dataGrowth) {
            $res['DataGrowth'] = null !== $this->dataGrowth ? $this->dataGrowth->toArray($noStream) : $this->dataGrowth;
        }

        if (null !== $this->hotData) {
            $res['HotData'] = null !== $this->hotData ? $this->hotData->toArray($noStream) : $this->hotData;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
