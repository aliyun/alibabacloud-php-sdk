<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsJobResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $asyncTaskId;
    protected $_name = [
        'asyncTaskId' => 'asyncTaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['asyncTaskId'] = $this->asyncTaskId;
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
        if (isset($map['asyncTaskId'])) {
            $model->asyncTaskId = $map['asyncTaskId'];
        }

        return $model;
    }
}
