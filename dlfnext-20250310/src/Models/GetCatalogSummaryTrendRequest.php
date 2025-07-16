<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class GetCatalogSummaryTrendRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2025-06-01
     *
     * @var string
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example 2025-05-01
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate' => 'endDate',
        'startDate' => 'startDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCatalogSummaryTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
