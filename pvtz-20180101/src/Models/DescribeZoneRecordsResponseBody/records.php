<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsResponseBody\records\record;

class records extends Model
{
    /**
     * @var record[]
     */
    public $record;
    protected $_name = [
        'record' => 'Record',
    ];

    public function validate()
    {
        if (\is_array($this->record)) {
            Model::validateArray($this->record);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->record) {
            if (\is_array($this->record)) {
                $res['Record'] = [];
                $n1 = 0;
                foreach ($this->record as $item1) {
                    $res['Record'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Record'])) {
            if (!empty($map['Record'])) {
                $model->record = [];
                $n1 = 0;
                foreach ($map['Record'] as $item1) {
                    $model->record[$n1] = record::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
