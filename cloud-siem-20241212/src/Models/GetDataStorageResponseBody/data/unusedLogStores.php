<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data;

use AlibabaCloud\Dara\Model;

class unusedLogStores extends Model
{
    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var int
     */
    public $logStoreTtl;

    /**
     * @var float
     */
    public $usedCapacity;
    protected $_name = [
        'logStoreName' => 'LogStoreName',
        'logStoreTtl' => 'LogStoreTtl',
        'usedCapacity' => 'UsedCapacity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }

        if (null !== $this->logStoreTtl) {
            $res['LogStoreTtl'] = $this->logStoreTtl;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }

        if (isset($map['LogStoreTtl'])) {
            $model->logStoreTtl = $map['LogStoreTtl'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
