<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetImageScanNumInPeriodRequest extends Model
{
    /**
     * @description The number of days.
     *
     * This parameter is required.
     * @example 7
     *
     * @var string
     */
    public $pastDay;
    protected $_name = [
        'pastDay' => 'PastDay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pastDay) {
            $res['PastDay'] = $this->pastDay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetImageScanNumInPeriodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PastDay'])) {
            $model->pastDay = $map['PastDay'];
        }

        return $model;
    }
}
