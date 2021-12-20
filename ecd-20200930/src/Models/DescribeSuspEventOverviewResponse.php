<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventOverviewResponse extends Model
{
    /**
     * @var int
     */
    public $remindCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $seriousCount;

    /**
     * @var int
     */
    public $suspiciousCount;
    protected $_name = [
        'remindCount'     => 'RemindCount',
        'requestId'       => 'RequestId',
        'seriousCount'    => 'SeriousCount',
        'suspiciousCount' => 'SuspiciousCount',
    ];

    public function validate()
    {
        Model::validateRequired('remindCount', $this->remindCount, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('seriousCount', $this->seriousCount, true);
        Model::validateRequired('suspiciousCount', $this->suspiciousCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindCount) {
            $res['RemindCount'] = $this->remindCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seriousCount) {
            $res['SeriousCount'] = $this->seriousCount;
        }
        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventOverviewResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindCount'])) {
            $model->remindCount = $map['RemindCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SeriousCount'])) {
            $model->seriousCount = $map['SeriousCount'];
        }
        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }

        return $model;
    }
}
