<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ExecuteStatementResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var records\records[]
     */
    public $records;
    protected $_name = [
        'records' => 'Records',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records\records::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
