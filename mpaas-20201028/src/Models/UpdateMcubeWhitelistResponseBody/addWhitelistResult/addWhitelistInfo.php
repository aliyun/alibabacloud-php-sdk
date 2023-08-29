<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateMcubeWhitelistResponseBody\addWhitelistResult;

use AlibabaCloud\Tea\Model;

class addWhitelistInfo extends Model
{
    /**
     * @var int
     */
    public $failNum;

    /**
     * @var string
     */
    public $failUserIds;

    /**
     * @var int
     */
    public $successNum;
    protected $_name = [
        'failNum'     => 'FailNum',
        'failUserIds' => 'FailUserIds',
        'successNum'  => 'SuccessNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failNum) {
            $res['FailNum'] = $this->failNum;
        }
        if (null !== $this->failUserIds) {
            $res['FailUserIds'] = $this->failUserIds;
        }
        if (null !== $this->successNum) {
            $res['SuccessNum'] = $this->successNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addWhitelistInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailNum'])) {
            $model->failNum = $map['FailNum'];
        }
        if (isset($map['FailUserIds'])) {
            $model->failUserIds = $map['FailUserIds'];
        }
        if (isset($map['SuccessNum'])) {
            $model->successNum = $map['SuccessNum'];
        }

        return $model;
    }
}
