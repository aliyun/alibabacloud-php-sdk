<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHDFSClusterResponseBody\data;

use AlibabaCloud\Dara\Model;

class analysis extends Model
{
    /**
     * @var int
     */
    public $hdfsScore;
    protected $_name = [
        'hdfsScore' => 'HdfsScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hdfsScore) {
            $res['HdfsScore'] = $this->hdfsScore;
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
        if (isset($map['HdfsScore'])) {
            $model->hdfsScore = $map['HdfsScore'];
        }

        return $model;
    }
}
