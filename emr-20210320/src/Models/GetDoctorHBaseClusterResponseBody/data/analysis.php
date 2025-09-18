<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseClusterResponseBody\data;

use AlibabaCloud\Dara\Model;

class analysis extends Model
{
    /**
     * @var int
     */
    public $hbaseScore;
    protected $_name = [
        'hbaseScore' => 'HbaseScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hbaseScore) {
            $res['HbaseScore'] = $this->hbaseScore;
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
        if (isset($map['HbaseScore'])) {
            $model->hbaseScore = $map['HbaseScore'];
        }

        return $model;
    }
}
