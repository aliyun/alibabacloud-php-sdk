<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyCompactionServiceSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var bool
     */
    public $enableCompactionService;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'enableCompactionService' => 'EnableCompactionService',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->enableCompactionService) {
            $res['EnableCompactionService'] = $this->enableCompactionService;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['EnableCompactionService'])) {
            $model->enableCompactionService = $map['EnableCompactionService'];
        }

        return $model;
    }
}
