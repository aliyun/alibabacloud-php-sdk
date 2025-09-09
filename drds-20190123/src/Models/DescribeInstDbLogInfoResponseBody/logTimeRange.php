<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstDbLogInfoResponseBody;

use AlibabaCloud\Dara\Model;

class logTimeRange extends Model
{
    /**
     * @var int
     */
    public $supportLatestTime;

    /**
     * @var int
     */
    public $supportOldestTime;
    protected $_name = [
        'supportLatestTime' => 'SupportLatestTime',
        'supportOldestTime' => 'SupportOldestTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportLatestTime) {
            $res['SupportLatestTime'] = $this->supportLatestTime;
        }

        if (null !== $this->supportOldestTime) {
            $res['SupportOldestTime'] = $this->supportOldestTime;
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
        if (isset($map['SupportLatestTime'])) {
            $model->supportLatestTime = $map['SupportLatestTime'];
        }

        if (isset($map['SupportOldestTime'])) {
            $model->supportOldestTime = $map['SupportOldestTime'];
        }

        return $model;
    }
}
