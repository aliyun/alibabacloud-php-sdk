<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class clients extends Model
{
    /**
     * @description 客户端类型，取值：
     *
     * - linux：Linux客户端
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @description 客户端状态，取值：
     *
     * - OFF：不允许登录
     * @example ON
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clientType' => 'ClientType',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clients
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
