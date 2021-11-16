<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class RecoverProblemRequest extends Model
{
    /**
     * @description 故障ID
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 通告类型 PROBLEM_NOTIFY：故障通告 PROBLEM_UPDATE：故障更新 PROBLEM_UPGRADE：故障升级 PROBLEM_DEGRADE：故障降级 PROBLEM_RECOVER：故障恢复 PROBLEM_REISSUE： 故障补发 PROBLEM_CANCEL：故障取消
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @description 恢复时间
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
