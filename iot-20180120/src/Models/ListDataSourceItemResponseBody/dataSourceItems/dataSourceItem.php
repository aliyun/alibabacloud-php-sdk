<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDataSourceItemResponseBody\dataSourceItems;

use AlibabaCloud\Tea\Model;

class dataSourceItem extends Model
{
    /**
     * @var int
     */
    public $dataSourceItemId;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'dataSourceItemId' => 'DataSourceItemId',
        'topic'            => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceItemId) {
            $res['DataSourceItemId'] = $this->dataSourceItemId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceItemId'])) {
            $model->dataSourceItemId = $map['DataSourceItemId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
