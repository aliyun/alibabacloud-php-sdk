<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetIpfilterListResponseBody\data;

use AlibabaCloud\Tea\Model;

class ipfilters extends Model
{
    /**
     * @description timestamp
     *
     * @example 1653547140
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Record ID
     *
     * @example 10083
     *
     * @var string
     */
    public $id;

    /**
     * @description IP address/IP range/IP segment
     *
     * @example xxx.xxx.xxx.xxx
     * xxx.xxx.xxx.xxx-xxx.xxx.xxx.xxx
     * xxx.xxx.xxx.xxx/xxx
     *
     * @var string
     */
    public $ipAddress;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'ipAddress' => 'IpAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipfilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        return $model;
    }
}
