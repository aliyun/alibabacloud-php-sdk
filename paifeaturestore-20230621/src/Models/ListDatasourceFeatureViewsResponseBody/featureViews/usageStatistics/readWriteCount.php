<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews\usageStatistics;

use AlibabaCloud\Dara\Model;

class readWriteCount extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $readCount;

    /**
     * @var int
     */
    public $writeCount;
    protected $_name = [
        'date' => 'Date',
        'readCount' => 'ReadCount',
        'writeCount' => 'WriteCount',
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

        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }

        if (null !== $this->writeCount) {
            $res['WriteCount'] = $this->writeCount;
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

        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }

        if (isset($map['WriteCount'])) {
            $model->writeCount = $map['WriteCount'];
        }

        return $model;
    }
}
