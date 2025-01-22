<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data\records\records[]
     */
    public $records;
    protected $_name = [
        'records' => 'Records',
    ];

    public function validate()
    {
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1             = 0;
                foreach ($this->records as $item1) {
                    $res['Records'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1             = 0;
                foreach ($map['Records'] as $item1) {
                    $model->records[$n1++] = \AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data\records\records::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
