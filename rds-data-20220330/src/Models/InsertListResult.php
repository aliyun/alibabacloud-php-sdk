<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class InsertListResult extends Model
{
    /**
     * @var int[]
     */
    public $autoIncrementKeys;

    /**
     * @var int
     */
    public $numberOfRecordsUpdated;
    protected $_name = [
        'autoIncrementKeys'      => 'AutoIncrementKeys',
        'numberOfRecordsUpdated' => 'NumberOfRecordsUpdated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoIncrementKeys) {
            $res['AutoIncrementKeys'] = $this->autoIncrementKeys;
        }
        if (null !== $this->numberOfRecordsUpdated) {
            $res['NumberOfRecordsUpdated'] = $this->numberOfRecordsUpdated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertListResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoIncrementKeys'])) {
            if (!empty($map['AutoIncrementKeys'])) {
                $model->autoIncrementKeys = $map['AutoIncrementKeys'];
            }
        }
        if (isset($map['NumberOfRecordsUpdated'])) {
            $model->numberOfRecordsUpdated = $map['NumberOfRecordsUpdated'];
        }

        return $model;
    }
}
