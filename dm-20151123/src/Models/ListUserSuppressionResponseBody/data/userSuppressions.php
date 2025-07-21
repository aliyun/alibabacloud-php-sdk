<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\ListUserSuppressionResponseBody\data;

use AlibabaCloud\Tea\Model;

class userSuppressions extends Model
{
    /**
     * @description Email address or domain name
     *
     * @example test@example.net
     *
     * @var string
     */
    public $address;

    /**
     * @description Creation time, timestamp, accurate to the second.
     *
     * @example 1715667435
     *
     * @var int
     */
    public $createTime;

    /**
     * @description Last bounce hit time, timestamp, accurate to the second.
     *
     * @example 1715667451
     *
     * @var int
     */
    public $lastBounceTime;

    /**
     * @description Invalid address ID
     *
     * @example 59511
     *
     * @var int
     */
    public $suppressionId;

    /**
     * @description Source of entry, invalid address type
     * - system
     * - user
     *
     * @example user
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'Address',
        'createTime' => 'CreateTime',
        'lastBounceTime' => 'LastBounceTime',
        'suppressionId' => 'SuppressionId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastBounceTime) {
            $res['LastBounceTime'] = $this->lastBounceTime;
        }
        if (null !== $this->suppressionId) {
            $res['SuppressionId'] = $this->suppressionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userSuppressions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastBounceTime'])) {
            $model->lastBounceTime = $map['LastBounceTime'];
        }
        if (isset($map['SuppressionId'])) {
            $model->suppressionId = $map['SuppressionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
