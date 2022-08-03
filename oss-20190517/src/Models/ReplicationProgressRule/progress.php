<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\ReplicationProgressRule;

use AlibabaCloud\Tea\Model;

class progress extends Model
{
    /**
     * @var string
     */
    public $historicalObject;

    /**
     * @var string
     */
    public $newObject;
    protected $_name = [
        'historicalObject' => 'HistoricalObject',
        'newObject'        => 'NewObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->historicalObject) {
            $res['HistoricalObject'] = $this->historicalObject;
        }
        if (null !== $this->newObject) {
            $res['NewObject'] = $this->newObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HistoricalObject'])) {
            $model->historicalObject = $map['HistoricalObject'];
        }
        if (isset($map['NewObject'])) {
            $model->newObject = $map['NewObject'];
        }

        return $model;
    }
}
