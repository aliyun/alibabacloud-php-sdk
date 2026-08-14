<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class singleZoneRiskAlert extends Model
{
    /**
     * @var string
     */
    public $confirmDate;

    /**
     * @var string
     */
    public $dispositionType;

    /**
     * @var bool
     */
    public $needAlert;

    /**
     * @var string
     */
    public $plannedCompletionDate;
    protected $_name = [
        'confirmDate' => 'ConfirmDate',
        'dispositionType' => 'DispositionType',
        'needAlert' => 'NeedAlert',
        'plannedCompletionDate' => 'PlannedCompletionDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confirmDate) {
            $res['ConfirmDate'] = $this->confirmDate;
        }

        if (null !== $this->dispositionType) {
            $res['DispositionType'] = $this->dispositionType;
        }

        if (null !== $this->needAlert) {
            $res['NeedAlert'] = $this->needAlert;
        }

        if (null !== $this->plannedCompletionDate) {
            $res['PlannedCompletionDate'] = $this->plannedCompletionDate;
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
        if (isset($map['ConfirmDate'])) {
            $model->confirmDate = $map['ConfirmDate'];
        }

        if (isset($map['DispositionType'])) {
            $model->dispositionType = $map['DispositionType'];
        }

        if (isset($map['NeedAlert'])) {
            $model->needAlert = $map['NeedAlert'];
        }

        if (isset($map['PlannedCompletionDate'])) {
            $model->plannedCompletionDate = $map['PlannedCompletionDate'];
        }

        return $model;
    }
}
