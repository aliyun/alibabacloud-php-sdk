<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class InsertResult extends Model
{
    /**
     * @var int
     */
    public $autoIncrementKey;

    /**
     * @var int
     */
    public $numberOfRecordsUpdated;
    protected $_name = [
        'autoIncrementKey'       => 'AutoIncrementKey',
        'numberOfRecordsUpdated' => 'NumberOfRecordsUpdated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoIncrementKey) {
            $res['AutoIncrementKey'] = $this->autoIncrementKey;
        }
        if (null !== $this->numberOfRecordsUpdated) {
            $res['NumberOfRecordsUpdated'] = $this->numberOfRecordsUpdated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoIncrementKey'])) {
            $model->autoIncrementKey = $map['AutoIncrementKey'];
        }
        if (isset($map['NumberOfRecordsUpdated'])) {
            $model->numberOfRecordsUpdated = $map['NumberOfRecordsUpdated'];
        }

        return $model;
    }
}
