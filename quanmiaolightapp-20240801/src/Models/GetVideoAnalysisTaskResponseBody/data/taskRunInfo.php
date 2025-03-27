<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class taskRunInfo extends Model
{
    /**
     * @var bool
     */
    public $concurrentChargeEnable;

    /**
     * @var int
     */
    public $responseTime;
    protected $_name = [
        'concurrentChargeEnable' => 'concurrentChargeEnable',
        'responseTime' => 'responseTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concurrentChargeEnable) {
            $res['concurrentChargeEnable'] = $this->concurrentChargeEnable;
        }

        if (null !== $this->responseTime) {
            $res['responseTime'] = $this->responseTime;
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
        if (isset($map['concurrentChargeEnable'])) {
            $model->concurrentChargeEnable = $map['concurrentChargeEnable'];
        }

        if (isset($map['responseTime'])) {
            $model->responseTime = $map['responseTime'];
        }

        return $model;
    }
}
