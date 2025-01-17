<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectApiInvokeInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $authCount;
    /**
     * @var int
     */
    public $expire;
    /**
     * @var int
     */
    public $flowRate;
    /**
     * @var int
     */
    public $remainAuthCount;
    /**
     * @var int
     */
    public $saleVersion;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
