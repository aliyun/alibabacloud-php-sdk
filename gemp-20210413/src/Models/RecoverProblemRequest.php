<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class RecoverProblemRequest extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $problemId;

    /**
     * @example PROBLEM_UPDATE
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @example 2020-02-01 00:00:00
     *
     * @var string
     */
    public $recoveryTime;
    protected $_name = [
        'problemId'         => 'problemId',
        'problemNotifyType' => 'problemNotifyType',
        'recoveryTime'      => 'recoveryTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }
        if (null !== $this->recoveryTime) {
            $res['recoveryTime'] = $this->recoveryTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoverProblemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }
        if (isset($map['recoveryTime'])) {
            $model->recoveryTime = $map['recoveryTime'];
        }

        return $model;
    }
}
