<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class QuerySingleReportRequest extends Model
{
    /**
     * @example typeItemTagScene
     *
     * @var string
     */
    public $reportType;
    protected $_name = [
        'reportType' => 'reportType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportType) {
            $res['reportType'] = $this->reportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySingleReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reportType'])) {
            $model->reportType = $map['reportType'];
        }

        return $model;
    }
}
