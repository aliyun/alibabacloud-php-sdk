<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetSparkAppLogRequest extends Model
{
    /**
     * @description The Spark application ID.
     *
     * > You can call the [ListSparkApps](~~~~) operation to query the Spark application ID.
     * @example s202206061441hz22a35ab000****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of log entries to return. Valid values: 1 to 500. Default value: 300.
     *
     * @example 20
     *
     * @var int
     */
    public $logLength;
    protected $_name = [
        'appId'     => 'AppId',
        'logLength' => 'LogLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->logLength) {
            $res['LogLength'] = $this->logLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSparkAppLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['LogLength'])) {
            $model->logLength = $map['LogLength'];
        }

        return $model;
    }
}
