<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkMinuteTrendResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var int
     */
    public $requestCount;

    /**
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'errorCount' => 'errorCount',
        'requestCount' => 'requestCount',
        'timePoint' => 'timePoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCount) {
            $res['errorCount'] = $this->errorCount;
        }

        if (null !== $this->requestCount) {
            $res['requestCount'] = $this->requestCount;
        }

        if (null !== $this->timePoint) {
            $res['timePoint'] = $this->timePoint;
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
        if (isset($map['errorCount'])) {
            $model->errorCount = $map['errorCount'];
        }

        if (isset($map['requestCount'])) {
            $model->requestCount = $map['requestCount'];
        }

        if (isset($map['timePoint'])) {
            $model->timePoint = $map['timePoint'];
        }

        return $model;
    }
}
