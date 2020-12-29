<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'count'     => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
