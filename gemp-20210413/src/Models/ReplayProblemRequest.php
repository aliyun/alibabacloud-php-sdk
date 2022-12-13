<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ReplayProblemRequest extends Model
{
    /**
     * @example 4361a0e1-6747-4834-96ce-0c4840fd3212
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 123
     *
     * @var int
     */
    public $problemId;

    /**
     * @example 3123
     *
     * @var int
     */
    public $replayDutyUserId;
    protected $_name = [
        'clientToken'      => 'clientToken',
        'problemId'        => 'problemId',
        'replayDutyUserId' => 'replayDutyUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->replayDutyUserId) {
            $res['replayDutyUserId'] = $this->replayDutyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplayProblemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['replayDutyUserId'])) {
            $model->replayDutyUserId = $map['replayDutyUserId'];
        }

        return $model;
    }
}
