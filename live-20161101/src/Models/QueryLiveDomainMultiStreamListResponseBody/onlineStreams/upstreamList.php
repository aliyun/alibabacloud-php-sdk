<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams;

use AlibabaCloud\Dara\Model;

class upstreamList extends Model
{
    /**
     * @var bool
     */
    public $masterFlag;

    /**
     * @var string
     */
    public $upstreamIp;

    /**
     * @var string
     */
    public $upstreamSequence;

    /**
     * @var string
     */
    public $upstreamTime;
    protected $_name = [
        'masterFlag' => 'MasterFlag',
        'upstreamIp' => 'UpstreamIp',
        'upstreamSequence' => 'UpstreamSequence',
        'upstreamTime' => 'UpstreamTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
