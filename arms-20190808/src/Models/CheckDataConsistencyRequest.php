<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CheckDataConsistencyRequest extends Model
{
    /**
     * @var int
     */
    public $currentTimestamp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $appType;
    protected $_name = [
        'currentTimestamp' => 'CurrentTimestamp',
        'regionId'         => 'RegionId',
        'proxyUserId'      => 'ProxyUserId',
        'pid'              => 'Pid',
        'appType'          => 'AppType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentTimestamp) {
            $res['CurrentTimestamp'] = $this->currentTimestamp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDataConsistencyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentTimestamp'])) {
            $model->currentTimestamp = $map['CurrentTimestamp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        return $model;
    }
}
