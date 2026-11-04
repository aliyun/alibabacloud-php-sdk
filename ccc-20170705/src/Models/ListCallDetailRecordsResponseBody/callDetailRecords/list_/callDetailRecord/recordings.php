<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallDetailRecordsResponseBody\callDetailRecords\list_\callDetailRecord\recordings\recording;

class recordings extends Model
{
    /**
     * @var recording[]
     */
    public $recording;
    protected $_name = [
        'recording' => 'Recording',
    ];

    public function validate()
    {
        if (\is_array($this->recording)) {
            Model::validateArray($this->recording);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recording) {
            if (\is_array($this->recording)) {
                $res['Recording'] = [];
                $n1 = 0;
                foreach ($this->recording as $item1) {
                    $res['Recording'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Recording'])) {
            if (!empty($map['Recording'])) {
                $model->recording = [];
                $n1 = 0;
                foreach ($map['Recording'] as $item1) {
                    $model->recording[$n1] = recording::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
