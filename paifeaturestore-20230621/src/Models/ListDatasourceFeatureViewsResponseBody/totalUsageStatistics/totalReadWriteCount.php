<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\totalUsageStatistics;

use AlibabaCloud\Dara\Model;

class totalReadWriteCount extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $totalReadCount;

    /**
     * @var int
     */
    public $totalWriteCount;
    protected $_name = [
        'date' => 'Date',
        'totalReadCount' => 'TotalReadCount',
        'totalWriteCount' => 'TotalWriteCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->totalReadCount) {
            $res['TotalReadCount'] = $this->totalReadCount;
        }

        if (null !== $this->totalWriteCount) {
            $res['TotalWriteCount'] = $this->totalWriteCount;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['TotalReadCount'])) {
            $model->totalReadCount = $map['TotalReadCount'];
        }

        if (isset($map['TotalWriteCount'])) {
            $model->totalWriteCount = $map['TotalWriteCount'];
        }

        return $model;
    }
}
