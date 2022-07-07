<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUserAssetIPTrafficInfoResponseBody;

use AlibabaCloud\Tea\Model;

class outTrafficInfo extends Model
{
    /**
     * @description 出方向接收流量Bps
     *
     * @var int
     */
    public $inBps;

    /**
     * @description 出方向接收流量Bps
     *
     * @var int
     */
    public $inPps;

    /**
     * @description 新建会话数
     *
     * @var int
     */
    public $newConn;

    /**
     * @description 出方向流量Bps
     *
     * @var int
     */
    public $outBps;

    /**
     * @description 出方向pps
     *
     * @var int
     */
    public $outPps;

    /**
     * @description 会话数
     *
     * @var int
     */
    public $sessionCount;
    protected $_name = [
        'inBps'        => 'InBps',
        'inPps'        => 'InPps',
        'newConn'      => 'NewConn',
        'outBps'       => 'OutBps',
        'outPps'       => 'OutPps',
        'sessionCount' => 'SessionCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->inPps) {
            $res['InPps'] = $this->inPps;
        }
        if (null !== $this->newConn) {
            $res['NewConn'] = $this->newConn;
        }
        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }
        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }
        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outTrafficInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['InPps'])) {
            $model->inPps = $map['InPps'];
        }
        if (isset($map['NewConn'])) {
            $model->newConn = $map['NewConn'];
        }
        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }
        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }
        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        return $model;
    }
}
