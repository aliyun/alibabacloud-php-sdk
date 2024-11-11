<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataAnalysisGBI\V20240823\Models\RunDataAnalysisResponseBody\data;

use AlibabaCloud\Tea\Model;

class sqlData extends Model
{
    /**
     * @var string[]
     */
    public $column;

    /**
     * @var mixed[][]
     */
    public $data;
    protected $_name = [
        'column' => 'column',
        'data'   => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['column'] = $this->column;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['column'])) {
            if (!empty($map['column'])) {
                $model->column = $map['column'];
            }
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = $map['data'];
            }
        }

        return $model;
    }
}
