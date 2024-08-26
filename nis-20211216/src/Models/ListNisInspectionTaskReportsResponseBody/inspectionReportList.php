<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionTaskReportsResponseBody;

use AlibabaCloud\Tea\Model;

class inspectionReportList extends Model
{
    /**
     * @example nir-7c3dd178738a429abe6d
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
     * @return inspectionReportList
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
