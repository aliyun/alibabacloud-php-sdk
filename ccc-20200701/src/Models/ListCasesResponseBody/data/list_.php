<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCasesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $abandonType;

    /**
     * @var int
     */
    public $attemptCount;

    /**
     * @var string
     */
    public $caseId;

    /**
     * @var string
     */
    public $customVariables;

    /**
     * @var string
     */
    public $failureReason;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'abandonType'     => 'AbandonType',
        'attemptCount'    => 'AttemptCount',
        'caseId'          => 'CaseId',
        'customVariables' => 'CustomVariables',
        'failureReason'   => 'FailureReason',
        'phoneNumber'     => 'PhoneNumber',
        'state'           => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonType) {
            $res['AbandonType'] = $this->abandonType;
        }
        if (null !== $this->attemptCount) {
            $res['AttemptCount'] = $this->attemptCount;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->customVariables) {
            $res['CustomVariables'] = $this->customVariables;
        }
        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonType'])) {
            $model->abandonType = $map['AbandonType'];
        }
        if (isset($map['AttemptCount'])) {
            $model->attemptCount = $map['AttemptCount'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['CustomVariables'])) {
            $model->customVariables = $map['CustomVariables'];
        }
        if (isset($map['FailureReason'])) {
            $model->failureReason = $map['FailureReason'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
