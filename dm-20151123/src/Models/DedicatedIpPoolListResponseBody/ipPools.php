<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolListResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolListResponseBody\ipPools\ips;
use AlibabaCloud\Tea\Model;

class ipPools extends Model
{
    /**
     * @description Creation time
     *
     * @example 2025-05-23T07:41:43Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description IP pool ID
     *
     * @example xxx
     *
     * @var string
     */
    public $id;

    /**
     * @description Number of source IP addresses
     *
     * @example 1
     *
     * @var int
     */
    public $ipCount;

    /**
     * @description List of IPs
     *
     * @var ips[]
     */
    public $ips;

    /**
     * @description IP pool name
     *
     * @example xxx
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'createTime' => 'CreateTime',
        'id' => 'Id',
        'ipCount' => 'IpCount',
        'ips' => 'Ips',
        'name' => 'Name',
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
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->ips) {
            $res['Ips'] = [];
            if (null !== $this->ips && \is_array($this->ips)) {
                $n = 0;
                foreach ($this->ips as $item) {
                    $res['Ips'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipPools
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
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n = 0;
                foreach ($map['Ips'] as $item) {
                    $model->ips[$n++] = null !== $item ? ips::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
