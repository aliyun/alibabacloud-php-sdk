<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateAppInstanceRequest;

use AlibabaCloud\Dara\Model;

class DBInstanceConfig extends Model
{
    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $payType;
    protected $_name = [
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceStorage' => 'DBInstanceStorage',
        'payType' => 'PayType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }

        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }

        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        return $model;
    }
}
