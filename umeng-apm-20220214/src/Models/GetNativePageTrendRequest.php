<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Dara\Model;

class GetNativePageTrendRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'appVersion' => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'endDate' => 'endDate',
        'startDate' => 'startDate',
        'timeUnit' => 'timeUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->timeUnit) {
            $res['timeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['timeUnit'])) {
            $model->timeUnit = $map['timeUnit'];
        }

        return $model;
    }
}
