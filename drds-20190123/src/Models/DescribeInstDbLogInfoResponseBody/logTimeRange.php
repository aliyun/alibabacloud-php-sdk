<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponseBody;

use AlibabaCloud\Tea\Model;

class logTimeRange extends Model
{
    /**
     * @var int
     */
    public $supportOldestTime;

    /**
     * @var int
     */
    public $supportLatestTime;
    protected $_name = [
        'supportOldestTime' => 'SupportOldestTime',
        'supportLatestTime' => 'SupportLatestTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportOldestTime) {
            $res['SupportOldestTime'] = $this->supportOldestTime;
        }
        if (null !== $this->supportLatestTime) {
            $res['SupportLatestTime'] = $this->supportLatestTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logTimeRange
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SupportOldestTime'])) {
            $model->supportOldestTime = $map['SupportOldestTime'];
        }
        if (isset($map['SupportLatestTime'])) {
            $model->supportLatestTime = $map['SupportLatestTime'];
        }

        return $model;
    }
}
