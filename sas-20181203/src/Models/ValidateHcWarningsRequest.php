<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ValidateHcWarningsRequest extends Model
{
    /**
     * @var string
     */
    public $checkIds;

    /**
     * @var string
     */
    public $riskIds;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $uuids;
    protected $_name = [
        'checkIds' => 'CheckIds',
        'riskIds' => 'RiskIds',
        'status' => 'Status',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkIds) {
            $res['CheckIds'] = $this->checkIds;
        }

        if (null !== $this->riskIds) {
            $res['RiskIds'] = $this->riskIds;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
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
        if (isset($map['CheckIds'])) {
            $model->checkIds = $map['CheckIds'];
        }

        if (isset($map['RiskIds'])) {
            $model->riskIds = $map['RiskIds'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
