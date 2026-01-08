<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPageResponseBody\data\agentInfo;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPageResponseBody\data\beebotInfo;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPageResponseBody\data\instagramInfo;

class data extends Model
{
    /**
     * @var agentInfo
     */
    public $agentInfo;

    /**
     * @var beebotInfo
     */
    public $beebotInfo;

    /**
     * @var instagramInfo
     */
    public $instagramInfo;
    protected $_name = [
        'agentInfo' => 'AgentInfo',
        'beebotInfo' => 'BeebotInfo',
        'instagramInfo' => 'InstagramInfo',
    ];

    public function validate()
    {
        if (null !== $this->agentInfo) {
            $this->agentInfo->validate();
        }
        if (null !== $this->beebotInfo) {
            $this->beebotInfo->validate();
        }
        if (null !== $this->instagramInfo) {
            $this->instagramInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInfo) {
            $res['AgentInfo'] = null !== $this->agentInfo ? $this->agentInfo->toArray($noStream) : $this->agentInfo;
        }

        if (null !== $this->beebotInfo) {
            $res['BeebotInfo'] = null !== $this->beebotInfo ? $this->beebotInfo->toArray($noStream) : $this->beebotInfo;
        }

        if (null !== $this->instagramInfo) {
            $res['InstagramInfo'] = null !== $this->instagramInfo ? $this->instagramInfo->toArray($noStream) : $this->instagramInfo;
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
        if (isset($map['AgentInfo'])) {
            $model->agentInfo = agentInfo::fromMap($map['AgentInfo']);
        }

        if (isset($map['BeebotInfo'])) {
            $model->beebotInfo = beebotInfo::fromMap($map['BeebotInfo']);
        }

        if (isset($map['InstagramInfo'])) {
            $model->instagramInfo = instagramInfo::fromMap($map['InstagramInfo']);
        }

        return $model;
    }
}
