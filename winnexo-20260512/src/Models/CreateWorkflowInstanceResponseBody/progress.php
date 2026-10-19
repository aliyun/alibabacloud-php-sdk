<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateWorkflowInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class progress extends Model
{
    /**
     * @var int
     */
    public $completedCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'completedCount' => 'completedCount',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completedCount) {
            $res['completedCount'] = $this->completedCount;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['completedCount'])) {
            $model->completedCount = $map['completedCount'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
