<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectApiInvokeInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of authorizations.
     *
     * @example 10000
     *
     * @var int
     */
    public $authCount;

    /**
     * @description The timestamp of the expiration date of the authorization number.
     *
     * @example 1815753600000
     *
     * @var int
     */
    public $expire;

    /**
     * @description The frequency of calls.
     *
     * @example 20
     *
     * @var int
     */
    public $flowRate;

    /**
     * @description The number of remaining authorizations.
     *
     * @example 900
     *
     * @var int
     */
    public $remainAuthCount;

    /**
     * @description The Authorized Version. Valid values include:
     *
     * **1:** trial version
     * **2:** Enterprise Edition
     *
     * @example 2
     *
     * @var int
     */
    public $saleVersion;

    /**
     * @description The time unit of the frequency limit. Value:
     *
     * **SECONDS**
     * **MINUTES**
     *
     * @example SECONDS
     *
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'authCount'       => 'AuthCount',
        'expire'          => 'Expire',
        'flowRate'        => 'FlowRate',
        'remainAuthCount' => 'RemainAuthCount',
        'saleVersion'     => 'SaleVersion',
        'timeUnit'        => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCount) {
            $res['AuthCount'] = $this->authCount;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->flowRate) {
            $res['FlowRate'] = $this->flowRate;
        }
        if (null !== $this->remainAuthCount) {
            $res['RemainAuthCount'] = $this->remainAuthCount;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCount'])) {
            $model->authCount = $map['AuthCount'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['FlowRate'])) {
            $model->flowRate = $map['FlowRate'];
        }
        if (isset($map['RemainAuthCount'])) {
            $model->remainAuthCount = $map['RemainAuthCount'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
