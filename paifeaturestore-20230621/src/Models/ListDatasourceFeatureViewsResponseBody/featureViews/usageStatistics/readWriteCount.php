<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews\usageStatistics;

use AlibabaCloud\Tea\Model;

class readWriteCount extends Model
{
    /**
     * @example 2025-03-18T00:00:00+08:00
     *
     * @var string
     */
    public $date;

    /**
     * @example 200
     *
     * @var int
     */
    public $readCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $writeCount;
    protected $_name = [
        'date' => 'Date',
        'readCount' => 'ReadCount',
        'writeCount' => 'WriteCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }
        if (null !== $this->writeCount) {
            $res['WriteCount'] = $this->writeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readWriteCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }
        if (isset($map['WriteCount'])) {
            $model->writeCount = $map['WriteCount'];
        }

        return $model;
    }
}
