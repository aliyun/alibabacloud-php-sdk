<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams;

use AlibabaCloud\Dara\Model;

class changeLogs extends Model
{
    /**
     * @var string
     */
    public $changeReason;

    /**
     * @var string
     */
    public $changeTime;

    /**
     * @var string
     */
    public $masterUpstream;

    /**
     * @var string
     */
    public $upstreamIp;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
