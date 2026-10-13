<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models;

use AlibabaCloud\Dara\Model;

class ExecMetaProfilingTaskRunRequest extends Model
{
    /**
     * @var string
     */
    public $batchNo;

    /**
     * @var int
     */
    public $componentId;
    protected $_name = [
        'batchNo' => 'batchNo',
        'componentId' => 'componentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchNo) {
            $res['batchNo'] = $this->batchNo;
        }

        if (null !== $this->componentId) {
            $res['componentId'] = $this->componentId;
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
        if (isset($map['batchNo'])) {
            $model->batchNo = $map['batchNo'];
        }

        if (isset($map['componentId'])) {
            $model->componentId = $map['componentId'];
        }

        return $model;
    }
}
