<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables\tableRows\tableColumns;

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
        if (\is_array($this->tableColumns)) {
            Model::validateArray($this->tableColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableColumns) {
            if (\is_array($this->tableColumns)) {
                $res['TableColumns'] = [];
                $n1 = 0;
                foreach ($this->tableColumns as $item1) {
                    $res['TableColumns'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TableColumns'])) {
            if (!empty($map['TableColumns'])) {
                $model->tableColumns = [];
                $n1 = 0;
                foreach ($map['TableColumns'] as $item1) {
                    $model->tableColumns[$n1] = tableColumns::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
