<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Dara\Model;

class QueryProductInstanceListRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $tenantUid;

    /**
     * @var int
     */
    public $toTime;
    protected $_name = [
        'appCode' => 'appCode',
        'fromTime' => 'fromTime',
        'requestId' => 'requestId',
        'tenantUid' => 'tenantUid',
        'toTime' => 'toTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['appCode'] = $this->appCode;
        }

        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->tenantUid) {
            $res['tenantUid'] = $this->tenantUid;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
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
        if (isset($map['appCode'])) {
            $model->appCode = $map['appCode'];
        }

        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['tenantUid'])) {
            $model->tenantUid = $map['tenantUid'];
        }

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
