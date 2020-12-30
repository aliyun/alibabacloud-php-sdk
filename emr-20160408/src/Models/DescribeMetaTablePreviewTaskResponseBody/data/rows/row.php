<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskResponseBody\data\rows;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskResponseBody\data\rows\row\columns;
use AlibabaCloud\Tea\Model;

class row extends Model
{
    /**
     * @var columns
     */
    public $columns;
    protected $_name = [
        'columns' => 'Columns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['Columns'] = null !== $this->columns ? $this->columns->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return row
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Columns'])) {
            $model->columns = columns::fromMap($map['Columns']);
        }

        return $model;
    }
}
