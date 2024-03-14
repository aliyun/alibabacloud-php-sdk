<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class CheckDataConsistencyRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var int
     */
    public $currentTimestamp;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appType'          => 'AppType',
        'currentTimestamp' => 'CurrentTimestamp',
        'pid'              => 'Pid',
        'proxyUserId'      => 'ProxyUserId',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->currentTimestamp) {
            $res['CurrentTimestamp'] = $this->currentTimestamp;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CurrentTimestamp'])) {
            $model->currentTimestamp = $map['CurrentTimestamp'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
