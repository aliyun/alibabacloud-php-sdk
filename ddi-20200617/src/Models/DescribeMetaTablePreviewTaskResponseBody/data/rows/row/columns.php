<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeMetaTablePreviewTaskResponseBody\data\rows\row;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @var string[]
     */
    public $column;
    protected $_name = [
        'column' => 'Column',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Column'])) {
            if (!empty($map['Column'])) {
                $model->column = $map['Column'];
            }
        }

        return $model;
    }
}
