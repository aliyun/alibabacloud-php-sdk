<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkCreateEnterprisePauseResponseBody\data;

use AlibabaCloud\Dara\Model;

class enterprisePause extends Model
{
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
    protected $_name = [
        'isDefault' => 'IsDefault',
        'isRest' => 'IsRest',
        'pauseStatus' => 'PauseStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->isRest) {
            $res['IsRest'] = $this->isRest;
        }

        if (null !== $this->pauseStatus) {
            $res['PauseStatus'] = $this->pauseStatus;
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
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['IsRest'])) {
            $model->isRest = $map['IsRest'];
        }

        if (isset($map['PauseStatus'])) {
            $model->pauseStatus = $map['PauseStatus'];
        }

        return $model;
    }
}
