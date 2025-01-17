<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCheckWarningCountRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var int
     */
    public $riskId;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'aliUid'  => 'AliUid',
        'checkId' => 'CheckId',
        'riskId'  => 'RiskId',
        'status'  => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
