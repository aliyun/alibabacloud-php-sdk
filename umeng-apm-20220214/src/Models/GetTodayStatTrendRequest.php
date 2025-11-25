<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models;

use AlibabaCloud\Dara\Model;

class GetTodayStatTrendRequest extends Model
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
     * @var int
     */
    public $type;
    protected $_name = [
        'appVersion' => 'appVersion',
        'dataSourceId' => 'dataSourceId',
        'type' => 'type',
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
