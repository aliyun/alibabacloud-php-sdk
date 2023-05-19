<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnFullDomainsBlockIPHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $IPList;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'IPList'    => 'IPList',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->IPList) {
            $res['IPList'] = $this->IPList;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnFullDomainsBlockIPHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IPList'])) {
            $model->IPList = $map['IPList'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
