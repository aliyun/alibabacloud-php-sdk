<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models;

use AlibabaCloud\Tea\Model;

class ModifyProtectionRuleCacheStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $wafTaskId;
    protected $_name = [
        'requestId'  => 'RequestId',
        'taskStatus' => 'TaskStatus',
        'wafTaskId'  => 'WafTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->wafTaskId) {
            $res['WafTaskId'] = $this->wafTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyProtectionRuleCacheStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['WafTaskId'])) {
            $model->wafTaskId = $map['WafTaskId'];
        }

        return $model;
    }
}
