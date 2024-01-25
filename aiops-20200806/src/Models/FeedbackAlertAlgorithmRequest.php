<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class FeedbackAlertAlgorithmRequest extends Model
{
    /**
     * @var int
     */
    public $alertId;

    /**
     * @var string
     */
    public $algorithmAccurateDescribe;

    /**
     * @var int
     */
    public $algorithmAccurateState;

    /**
     * @var int
     */
    public $feedbackType;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'alertId'                   => 'AlertId',
        'algorithmAccurateDescribe' => 'AlgorithmAccurateDescribe',
        'algorithmAccurateState'    => 'AlgorithmAccurateState',
        'feedbackType'              => 'FeedbackType',
        'operaUid'                  => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->algorithmAccurateDescribe) {
            $res['AlgorithmAccurateDescribe'] = $this->algorithmAccurateDescribe;
        }
        if (null !== $this->algorithmAccurateState) {
            $res['AlgorithmAccurateState'] = $this->algorithmAccurateState;
        }
        if (null !== $this->feedbackType) {
            $res['FeedbackType'] = $this->feedbackType;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FeedbackAlertAlgorithmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlgorithmAccurateDescribe'])) {
            $model->algorithmAccurateDescribe = $map['AlgorithmAccurateDescribe'];
        }
        if (isset($map['AlgorithmAccurateState'])) {
            $model->algorithmAccurateState = $map['AlgorithmAccurateState'];
        }
        if (isset($map['FeedbackType'])) {
            $model->feedbackType = $map['FeedbackType'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
