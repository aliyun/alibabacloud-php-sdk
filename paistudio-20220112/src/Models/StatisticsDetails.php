<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class StatisticsDetails extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $idleNum;
    protected $_name = [
        'count' => 'Count',
        'idleNum' => 'IdleNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->idleNum) {
            $res['IdleNum'] = $this->idleNum;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['IdleNum'])) {
            $model->idleNum = $map['IdleNum'];
        }

        return $model;
    }
}
