<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DeleteNisInspectionTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ni-209d****wfirfwc2yl
     *
     * @var string
     */
    public $inspectionTaskId;
    protected $_name = [
        'inspectionTaskId' => 'InspectionTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionTaskId) {
            $res['InspectionTaskId'] = $this->inspectionTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNisInspectionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionTaskId'])) {
            $model->inspectionTaskId = $map['InspectionTaskId'];
        }

        return $model;
    }
}
