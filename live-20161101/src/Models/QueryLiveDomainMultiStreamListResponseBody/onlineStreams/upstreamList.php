<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams;

use AlibabaCloud\Tea\Model;

class upstreamList extends Model
{
    /**
     * @description The active/standby tag.
     *
     * >  This parameter indicates whether the active or standby stream is being distributed.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $masterFlag;

    /**
     * @description The IP address of the stream ingest client.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $upstreamIp;

    /**
     * @description The unique identifier of the stream ingest.
     *
     * @example ***test_Alirewrite1
     *
     * @var string
     */
    public $upstreamSequence;

    /**
     * @description The stream ingest time.
     *
     * @example 2024-11-13T09:20:47Z
     *
     * @var string
     */
    public $upstreamTime;
    protected $_name = [
        'masterFlag' => 'MasterFlag',
        'upstreamIp' => 'UpstreamIp',
        'upstreamSequence' => 'UpstreamSequence',
        'upstreamTime' => 'UpstreamTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterFlag) {
            $res['MasterFlag'] = $this->masterFlag;
        }
        if (null !== $this->upstreamIp) {
            $res['UpstreamIp'] = $this->upstreamIp;
        }
        if (null !== $this->upstreamSequence) {
            $res['UpstreamSequence'] = $this->upstreamSequence;
        }
        if (null !== $this->upstreamTime) {
            $res['UpstreamTime'] = $this->upstreamTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upstreamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterFlag'])) {
            $model->masterFlag = $map['MasterFlag'];
        }
        if (isset($map['UpstreamIp'])) {
            $model->upstreamIp = $map['UpstreamIp'];
        }
        if (isset($map['UpstreamSequence'])) {
            $model->upstreamSequence = $map['UpstreamSequence'];
        }
        if (isset($map['UpstreamTime'])) {
            $model->upstreamTime = $map['UpstreamTime'];
        }

        return $model;
    }
}
