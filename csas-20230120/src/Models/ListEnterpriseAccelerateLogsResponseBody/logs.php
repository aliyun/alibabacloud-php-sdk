<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListEnterpriseAccelerateLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $department;

    /**
     * @example windows
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example www.bing.com:443
     *
     * @var string
     */
    public $dstAddr;

    /**
     * @example 12299
     *
     * @var string
     */
    public $inBytes;

    /**
     * @example 2603
     *
     * @var string
     */
    public $outBytes;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @example 8.222.179.xxx:10015
     *
     * @var string
     */
    public $proxyAddr;

    /**
     * @example 1748422797
     *
     * @var string
     */
    public $unixTime;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'department' => 'Department',
        'deviceType' => 'DeviceType',
        'dstAddr' => 'DstAddr',
        'inBytes' => 'InBytes',
        'outBytes' => 'OutBytes',
        'policyName' => 'PolicyName',
        'proxyAddr' => 'ProxyAddr',
        'unixTime' => 'UnixTime',
        'username' => 'Username',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->dstAddr) {
            $res['DstAddr'] = $this->dstAddr;
        }
        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }
        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->proxyAddr) {
            $res['ProxyAddr'] = $this->proxyAddr;
        }
        if (null !== $this->unixTime) {
            $res['UnixTime'] = $this->unixTime;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DstAddr'])) {
            $model->dstAddr = $map['DstAddr'];
        }
        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }
        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['ProxyAddr'])) {
            $model->proxyAddr = $map['ProxyAddr'];
        }
        if (isset($map['UnixTime'])) {
            $model->unixTime = $map['UnixTime'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
