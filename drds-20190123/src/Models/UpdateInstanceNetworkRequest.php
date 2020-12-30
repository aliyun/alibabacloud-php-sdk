<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $srcInstanceNetworkType;

    /**
     * @var bool
     */
    public $retainClassic;

    /**
     * @var int
     */
    public $classicExpiredDays;
    protected $_name = [
        'drdsInstanceId'         => 'DrdsInstanceId',
        'srcInstanceNetworkType' => 'SrcInstanceNetworkType',
        'retainClassic'          => 'RetainClassic',
        'classicExpiredDays'     => 'ClassicExpiredDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->srcInstanceNetworkType) {
            $res['SrcInstanceNetworkType'] = $this->srcInstanceNetworkType;
        }
        if (null !== $this->retainClassic) {
            $res['RetainClassic'] = $this->retainClassic;
        }
        if (null !== $this->classicExpiredDays) {
            $res['ClassicExpiredDays'] = $this->classicExpiredDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['SrcInstanceNetworkType'])) {
            $model->srcInstanceNetworkType = $map['SrcInstanceNetworkType'];
        }
        if (isset($map['RetainClassic'])) {
            $model->retainClassic = $map['RetainClassic'];
        }
        if (isset($map['ClassicExpiredDays'])) {
            $model->classicExpiredDays = $map['ClassicExpiredDays'];
        }

        return $model;
    }
}
