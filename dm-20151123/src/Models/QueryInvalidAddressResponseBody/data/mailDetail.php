<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryInvalidAddressResponseBody\data;

use AlibabaCloud\Tea\Model;

class mailDetail extends Model
{
    /**
     * @description Update time.
     *
     * @example 2021-04-28T17:11Z
     *
     * @var string
     */
    public $lastUpdateTime;

    /**
     * @description Recipient address.
     *
     * @example toaddress@example.com
     *
     * @var string
     */
    public $toAddress;

    /**
     * @description Update time (in timestamp format).
     *
     * @example 1619601108
     *
     * @var int
     */
    public $utcLastUpdateTime;
    protected $_name = [
        'lastUpdateTime' => 'LastUpdateTime',
        'toAddress' => 'ToAddress',
        'utcLastUpdateTime' => 'UtcLastUpdateTime',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return mailDetail
     */
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
