<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAsyncErrorRequestStatByCodeResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The number of SQL queries corresponding to the error code.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The error code returned if the request failed.
     *
     * @example 1062
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'count'      => 'count',
        'errorCode'  => 'errorCode',
        'instanceId' => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
