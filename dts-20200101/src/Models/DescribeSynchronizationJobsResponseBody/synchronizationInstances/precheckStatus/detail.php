<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances\precheckStatus;

use AlibabaCloud\Dara\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $checkStatus;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $repairMethod;
    protected $_name = [
        'checkStatus'  => 'CheckStatus',
        'errorMessage' => 'ErrorMessage',
        'itemName'     => 'ItemName',
        'repairMethod' => 'RepairMethod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->repairMethod) {
            $res['RepairMethod'] = $this->repairMethod;
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
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['RepairMethod'])) {
            $model->repairMethod = $map['RepairMethod'];
        }

        return $model;
    }
}
