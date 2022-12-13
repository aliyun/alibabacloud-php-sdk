<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateProblemNoticeRequest extends Model
{
    /**
     * @example 4361a0e1-6747-4834-96ce-0c4840fd3812
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 1312
     *
     * @var int
     */
    public $problemId;

    /**
     * @example PROBLEM_NOTIFY
     *
     * @var string
     */
    public $problemNotifyType;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'problemId'         => 'problemId',
        'problemNotifyType' => 'problemNotifyType',
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
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProblemNoticeRequest
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
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }

        return $model;
    }
}
