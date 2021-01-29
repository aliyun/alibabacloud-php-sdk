<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables\tableRows\tableColumns;
use AlibabaCloud\Tea\Model;

class tableRows extends Model
{
    /**
     * @var tableColumns[]
     */
    public $tableColumns;
    protected $_name = [
        'tableColumns' => 'TableColumns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableColumns) {
            $res['TableColumns'] = [];
            if (null !== $this->tableColumns && \is_array($this->tableColumns)) {
                $n = 0;
                foreach ($this->tableColumns as $item) {
                    $res['TableColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableRows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableColumns'])) {
            if (!empty($map['TableColumns'])) {
                $model->tableColumns = [];
                $n                   = 0;
                foreach ($map['TableColumns'] as $item) {
                    $model->tableColumns[$n++] = null !== $item ? tableColumns::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
