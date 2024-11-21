<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanRequest;

use AlibabaCloud\Tea\Model;

class dataInfo extends Model
{
    /**
     * @description Disk data metric code. Options:
     *
     * - replica: Replica settings
     * @example totalRawData
     *
     * @var string
     */
    public $code;

    /**
     * @description Disk usage metric value.
     *
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description Total number of data entries.
     *
     * @example 10000
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Disk data type. Options:
     *
     * - warm: Cold data
     * @example hot
     *
     * @var string
     */
    public $type;

    /**
     * @description Data or time unit. Options:
     *
     * - Time units: DAYS, WEEKS, MONTHS, YEARS
     * @example MiB
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'code'       => 'code',
        'size'       => 'size',
        'totalCount' => 'totalCount',
        'type'       => 'type',
        'unit'       => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
