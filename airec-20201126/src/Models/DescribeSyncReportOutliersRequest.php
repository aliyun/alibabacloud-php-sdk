<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class DescribeSyncReportOutliersRequest extends Model
{
    /**
     * @example 1586673466
     *
     * @var int
     */
    public $endTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $key;

    /**
     * @description error|info|warn
     *
     * @example info
     *
     * @var string
     */
    public $levelType;

    /**
     * @example 1586673466
     *
     * @var int
     */
    public $startTime;

    /**
     * @description item|hehavoir|user
     *
     * @example behavior
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'   => 'endTime',
        'key'       => 'key',
        'levelType' => 'levelType',
        'startTime' => 'startTime',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->levelType) {
            $res['levelType'] = $this->levelType;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSyncReportOutliersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['levelType'])) {
            $model->levelType = $map['levelType'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
