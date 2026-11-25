<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetDataStorageResponseBody\data;

use AlibabaCloud\Dara\Model;

class normalizationLogStores extends Model
{
    /**
     * @var bool
     */
    public $autoKeyDetect;

    /**
     * @var bool
     */
    public $logStoreExisted;

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
        'autoKeyDetect' => 'AutoKeyDetect',
        'logStoreExisted' => 'LogStoreExisted',
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
        if (null !== $this->autoKeyDetect) {
            $res['AutoKeyDetect'] = $this->autoKeyDetect;
        }

        if (null !== $this->logStoreExisted) {
            $res['LogStoreExisted'] = $this->logStoreExisted;
        }

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
        if (isset($map['AutoKeyDetect'])) {
            $model->autoKeyDetect = $map['AutoKeyDetect'];
        }

        if (isset($map['LogStoreExisted'])) {
            $model->logStoreExisted = $map['LogStoreExisted'];
        }

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
