<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord;

class list_ extends Model
{
    /**
     * @var callDetailRecord[]
     */
    public $callDetailRecord;
    protected $_name = [
        'callDetailRecord' => 'CallDetailRecord',
    ];

    public function validate()
    {
        if (\is_array($this->callDetailRecord)) {
            Model::validateArray($this->callDetailRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callDetailRecord) {
            if (\is_array($this->callDetailRecord)) {
                $res['CallDetailRecord'] = [];
                $n1 = 0;
                foreach ($this->callDetailRecord as $item1) {
                    $res['CallDetailRecord'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CallDetailRecord'])) {
            if (!empty($map['CallDetailRecord'])) {
                $model->callDetailRecord = [];
                $n1 = 0;
                foreach ($map['CallDetailRecord'] as $item1) {
                    $model->callDetailRecord[$n1] = callDetailRecord::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
