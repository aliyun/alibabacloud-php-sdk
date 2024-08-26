<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DeleteNisInspectionReportRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example nir-ffd1af****196d0
     *
     * @var string
     */
    public $inspectionReportId;
    protected $_name = [
        'inspectionReportId' => 'InspectionReportId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionReportId) {
            $res['InspectionReportId'] = $this->inspectionReportId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteNisInspectionReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionReportId'])) {
            $model->inspectionReportId = $map['InspectionReportId'];
        }

        return $model;
    }
}
