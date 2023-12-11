<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ModifyDataSourceLogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example 220ba97c9d1fdb0b9c7e8c7ca328d7ea
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
