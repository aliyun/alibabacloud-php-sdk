<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Tea\Model;

class GetTodayStatTrendRequest extends Model
{
    /**
     * @example 1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 5fb6001a73749c24fd9cb356
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'appVersion'   => 'appVersion',
        'dataSourceId' => 'dataSourceId',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTodayStatTrendRequest
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
