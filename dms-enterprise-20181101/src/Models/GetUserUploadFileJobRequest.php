<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GetUserUploadFileJobRequest extends Model
{
    /**
     * @var string
     */
    public $jobKey;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'jobKey' => 'JobKey',
        'tid'    => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
