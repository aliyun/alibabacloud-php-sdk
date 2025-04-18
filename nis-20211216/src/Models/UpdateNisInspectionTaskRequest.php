<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class UpdateNisInspectionTaskRequest extends Model
{
    /**
     * @var string
     */
    public $inspectionTaskId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'inspectionTaskId' => 'InspectionTaskId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inspectionTaskId) {
            $res['InspectionTaskId'] = $this->inspectionTaskId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['InspectionTaskId'])) {
            $model->inspectionTaskId = $map['InspectionTaskId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
