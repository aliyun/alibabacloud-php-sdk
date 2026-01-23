<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardStatisticsResponseBody\data;

use AlibabaCloud\Dara\Model;

class standardTypeCountList extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $standardType;
    protected $_name = [
        'count' => 'Count',
        'standardType' => 'StandardType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->standardType) {
            $res['StandardType'] = $this->standardType;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['StandardType'])) {
            $model->standardType = $map['StandardType'];
        }

        return $model;
    }
}
