<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;

class GetStatTrendRequest extends Model
{
    /**
     * @example 1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description This parameter is required.
     *
     * @example 5fb6001a73749c24fd9cb356
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example 2021-06-03
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 2021-06-01
     *
     * @var string
     */
    public $startDate;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'appVersion'   => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'endDate'      => 'endDate',
        'startDate'    => 'startDate',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['appVersion'] = $this->appVersion;
        }
        if (null !== $this->dataSourceId) {
            $res['dataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStatTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appVersion'])) {
            $model->appVersion = $map['appVersion'];
        }
        if (isset($map['dataSourceId'])) {
            $model->dataSourceId = $map['dataSourceId'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
