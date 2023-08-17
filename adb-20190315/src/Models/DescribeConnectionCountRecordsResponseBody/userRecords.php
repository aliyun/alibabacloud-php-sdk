<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeConnectionCountRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class userRecords extends Model
{
    /**
     * @description The number of connections.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The name of the user used to connect to the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'count' => 'Count',
        'user'  => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
