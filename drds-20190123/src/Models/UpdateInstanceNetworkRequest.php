<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceNetworkRequest extends Model
{
    /**
     * @var int
     */
    public $classicExpiredDays;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var bool
     */
    public $retainClassic;

    /**
     * @var string
     */
    public $srcInstanceNetworkType;
    protected $_name = [
        'classicExpiredDays' => 'ClassicExpiredDays',
        'drdsInstanceId' => 'DrdsInstanceId',
        'retainClassic' => 'RetainClassic',
        'srcInstanceNetworkType' => 'SrcInstanceNetworkType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classicExpiredDays) {
            $res['ClassicExpiredDays'] = $this->classicExpiredDays;
        }

        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        if (null !== $this->retainClassic) {
            $res['RetainClassic'] = $this->retainClassic;
        }

        if (null !== $this->srcInstanceNetworkType) {
            $res['SrcInstanceNetworkType'] = $this->srcInstanceNetworkType;
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
        if (isset($map['ClassicExpiredDays'])) {
            $model->classicExpiredDays = $map['ClassicExpiredDays'];
        }

        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        if (isset($map['RetainClassic'])) {
            $model->retainClassic = $map['RetainClassic'];
        }

        if (isset($map['SrcInstanceNetworkType'])) {
            $model->srcInstanceNetworkType = $map['SrcInstanceNetworkType'];
        }

        return $model;
    }
}
