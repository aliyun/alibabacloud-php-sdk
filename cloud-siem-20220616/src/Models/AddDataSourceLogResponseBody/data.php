<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of logs that are added. The value 1 indicates that the log is added, and a value less than or equal to 0 indicates that the log failed to be added.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the log. The ID is an MD5 hash value that is calculated by the threat analysis feature based on specific parameters.
     *
     * @example ef33097c9d1fdb0b9c7e8c7ca320pkl1
     *
     * @var string
     */
    public $logInstanceId;
    protected $_name = [
        'count'         => 'Count',
        'logInstanceId' => 'LogInstanceId',
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
        if (null !== $this->logInstanceId) {
            $res['LogInstanceId'] = $this->logInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['LogInstanceId'])) {
            $model->logInstanceId = $map['LogInstanceId'];
        }

        return $model;
    }
}
