<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceNetworkRequest extends Model
{
    /**
     * @description Specifies the retention period of the classic network endpoint. Unit: days.
     *
     * @example 30
     *
     * @var int
     */
    public $classicExpiredDays;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds******
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description Specifies whether to retain the classic network endpoint.
     *
     * @example true
     *
     * @var bool
     */
    public $retainClassic;

    /**
     * @description The network type of the PolarDB-X 1.0 instance. Valid values:
     *
     *   vpc: Virtual Private Cloud (VPC)
     *   classic: classic network
     *
     * @example classic
     *
     * @var string
     */
    public $srcInstanceNetworkType;
    protected $_name = [
        'classicExpiredDays'     => 'ClassicExpiredDays',
        'drdsInstanceId'         => 'DrdsInstanceId',
        'retainClassic'          => 'RetainClassic',
        'srcInstanceNetworkType' => 'SrcInstanceNetworkType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateInstanceNetworkRequest
     */
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
