<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\AddDataSourceResponseBody;

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
    public $dataSourceInstanceId;
    protected $_name = [
        'count'                => 'Count',
        'dataSourceInstanceId' => 'DataSourceInstanceId',
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
        if (null !== $this->dataSourceInstanceId) {
            $res['DataSourceInstanceId'] = $this->dataSourceInstanceId;
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
        if (isset($map['DataSourceInstanceId'])) {
            $model->dataSourceInstanceId = $map['DataSourceInstanceId'];
        }

        return $model;
    }
}
