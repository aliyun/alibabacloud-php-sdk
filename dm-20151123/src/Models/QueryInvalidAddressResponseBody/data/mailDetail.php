<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressResponseBody\data;

use AlibabaCloud\Dara\Model;

class mailDetail extends Model
{
    /**
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var int
     */
    public $utcLastUpdateTime;
    protected $_name = [
        'lastUpdateTime' => 'LastUpdateTime',
        'toAddress' => 'ToAddress',
        'utcLastUpdateTime' => 'UtcLastUpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }

        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }

        if (null !== $this->utcLastUpdateTime) {
            $res['UtcLastUpdateTime'] = $this->utcLastUpdateTime;
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
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }

        if (isset($map['UtcLastUpdateTime'])) {
            $model->utcLastUpdateTime = $map['UtcLastUpdateTime'];
        }

        return $model;
    }
}
