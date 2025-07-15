<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams;

use AlibabaCloud\Tea\Model;

class changeLogs extends Model
{
    /**
     * @description The reason for the switchover.
     *
     *   merge cut manually: You proactively switched the stream.
     *   master stream no data: No data is available in the active stream.
     *   master stream low quality: The quality of the active stream deteriorated.
     *
     * @example merge cut manually
     *
     * @var string
     */
    public $changeReason;

    /**
     * @description The switchover time.
     *
     * @example 2024-11-13T09:20:47Z
     *
     * @var string
     */
    public $changeTime;

    /**
     * @description The stream used after the switchover.
     *
     * @example rtmp://118.178.168.35:1936/wwMultitest/pull.livetest2.aliyunlive.com_wwMultitest428_AliRewrite_2?vhost=pull.livetest2.aliyunlive.com&live_rtmp_test=on
     *
     * @var string
     */
    public $masterUpstream;

    /**
     * @description The IP address used after the switchover.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $upstreamIp;

    /**
     * @description The identifier of the stream after the switchover.
     *
     * @example ***test_AliRewrite_2
     *
     * @var string
     */
    public $upstreamSequence;
    protected $_name = [
        'changeReason' => 'ChangeReason',
        'changeTime' => 'ChangeTime',
        'masterUpstream' => 'MasterUpstream',
        'upstreamIp' => 'UpstreamIp',
        'upstreamSequence' => 'UpstreamSequence',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeReason) {
            $res['ChangeReason'] = $this->changeReason;
        }
        if (null !== $this->changeTime) {
            $res['ChangeTime'] = $this->changeTime;
        }
        if (null !== $this->masterUpstream) {
            $res['MasterUpstream'] = $this->masterUpstream;
        }
        if (null !== $this->upstreamIp) {
            $res['UpstreamIp'] = $this->upstreamIp;
        }
        if (null !== $this->upstreamSequence) {
            $res['UpstreamSequence'] = $this->upstreamSequence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeReason'])) {
            $model->changeReason = $map['ChangeReason'];
        }
        if (isset($map['ChangeTime'])) {
            $model->changeTime = $map['ChangeTime'];
        }
        if (isset($map['MasterUpstream'])) {
            $model->masterUpstream = $map['MasterUpstream'];
        }
        if (isset($map['UpstreamIp'])) {
            $model->upstreamIp = $map['UpstreamIp'];
        }
        if (isset($map['UpstreamSequence'])) {
            $model->upstreamSequence = $map['UpstreamSequence'];
        }

        return $model;
    }
}
