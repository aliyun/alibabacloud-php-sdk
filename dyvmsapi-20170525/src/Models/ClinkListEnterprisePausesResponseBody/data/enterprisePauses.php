<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListEnterprisePausesResponseBody\data;

use AlibabaCloud\Dara\Model;

class enterprisePauses extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isDefault;

    /**
     * @var string
     */
    public $isRest;

    /**
     * @var string
     */
    public $pauseStatus;

    /**
     * @var int
     */
    public $sort;
    protected $_name = [
        'id' => 'Id',
        'isDefault' => 'IsDefault',
        'isRest' => 'IsRest',
        'pauseStatus' => 'PauseStatus',
        'sort' => 'Sort',
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

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->isRest) {
            $res['IsRest'] = $this->isRest;
        }

        if (null !== $this->pauseStatus) {
            $res['PauseStatus'] = $this->pauseStatus;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
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

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['IsRest'])) {
            $model->isRest = $map['IsRest'];
        }

        if (isset($map['PauseStatus'])) {
            $model->pauseStatus = $map['PauseStatus'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
