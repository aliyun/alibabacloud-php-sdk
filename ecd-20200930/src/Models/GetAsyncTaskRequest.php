<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetAsyncTaskRequest extends Model
{
    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $cdsId;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'cdsId' => 'CdsId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }

        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
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
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }

        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }

        return $model;
    }
}
