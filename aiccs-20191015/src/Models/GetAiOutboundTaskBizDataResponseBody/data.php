<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAiOutboundTaskBizDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"customer":123}
     *
     * @var string
     */
    public $bizData;

    /**
     * @example 123
     *
     * @var int
     */
    public $caseId;

    /**
     * @example 158****0000
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @example 123456
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'bizData'  => 'BizData',
        'caseId'   => 'CaseId',
        'phoneNum' => 'PhoneNum',
        'taskId'   => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
