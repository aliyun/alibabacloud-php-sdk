<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class AddSecretBlacklistRequest extends Model
{
    /**
     * @var string
     */
    public $blackNo;
    /**
     * @var string
     */
    public $blackType;
    /**
     * @var string
     */
    public $poolKey;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var string
     */
    public $wayControl;
    protected $_name = [
        'blackNo'    => 'BlackNo',
        'blackType'  => 'BlackType',
        'poolKey'    => 'PoolKey',
        'remark'     => 'Remark',
        'wayControl' => 'WayControl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackNo) {
            $res['BlackNo'] = $this->blackNo;
        }

        if (null !== $this->blackType) {
            $res['BlackType'] = $this->blackType;
        }

        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->wayControl) {
            $res['WayControl'] = $this->wayControl;
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
        if (isset($map['BlackNo'])) {
            $model->blackNo = $map['BlackNo'];
        }

        if (isset($map['BlackType'])) {
            $model->blackType = $map['BlackType'];
        }

        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['WayControl'])) {
            $model->wayControl = $map['WayControl'];
        }

        return $model;
    }
}
