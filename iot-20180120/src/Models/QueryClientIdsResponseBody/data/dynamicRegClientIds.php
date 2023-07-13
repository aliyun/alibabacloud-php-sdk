<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryClientIdsResponseBody\data;

use AlibabaCloud\Tea\Model;

class dynamicRegClientIds extends Model
{
    /**
     * @description The ClientID of the device.
     *
     * @example 9rSzYt4js92********f000112
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The time when the ClientID was created.
     *
     * @example 1636514022424
     *
     * @var int
     */
    public $createTime;
    protected $_name = [
        'clientId'   => 'ClientId',
        'createTime' => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dynamicRegClientIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
