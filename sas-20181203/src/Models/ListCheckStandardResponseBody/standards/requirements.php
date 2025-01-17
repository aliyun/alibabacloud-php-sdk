<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckStandardResponseBody\standards;

use AlibabaCloud\Dara\Model;

class requirements extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $riskCheckCount;
    /**
     * @var string
     */
    public $showName;
    /**
     * @var int
     */
    public $showPriorityLevel;
    protected $_name = [
        'id'                => 'Id',
        'riskCheckCount'    => 'RiskCheckCount',
        'showName'          => 'ShowName',
        'showPriorityLevel' => 'ShowPriorityLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->riskCheckCount) {
            $res['RiskCheckCount'] = $this->riskCheckCount;
        }

        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        if (null !== $this->showPriorityLevel) {
            $res['ShowPriorityLevel'] = $this->showPriorityLevel;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RiskCheckCount'])) {
            $model->riskCheckCount = $map['RiskCheckCount'];
        }

        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        if (isset($map['ShowPriorityLevel'])) {
            $model->showPriorityLevel = $map['ShowPriorityLevel'];
        }

        return $model;
    }
}
