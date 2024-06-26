<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\SDK\Baas\V20180731\Models\CreateChannelRequest\organization;
use AlibabaCloud\Tea\Model;

class CreateChannelRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $batchTimeout;

    /**
     * @description This parameter is required.
     *
     * @example channelx
     *
     * @var string
     */
    public $channelName;

    /**
     * @description This parameter is required.
     *
     * @example consortium-aaaaaa-akpcsjjac2jd
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxMessageCount;

    /**
     * @description This parameter is required.
     *
     * @var organization[]
     */
    public $organization;

    /**
     * @example 2
     *
     * @var int
     */
    public $preferredMaxBytes;
    protected $_name = [
        'batchTimeout'      => 'BatchTimeout',
        'channelName'       => 'ChannelName',
        'consortiumId'      => 'ConsortiumId',
        'maxMessageCount'   => 'MaxMessageCount',
        'organization'      => 'Organization',
        'preferredMaxBytes' => 'PreferredMaxBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTimeout) {
            $res['BatchTimeout'] = $this->batchTimeout;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->maxMessageCount) {
            $res['MaxMessageCount'] = $this->maxMessageCount;
        }
        if (null !== $this->organization) {
            $res['Organization'] = [];
            if (null !== $this->organization && \is_array($this->organization)) {
                $n = 0;
                foreach ($this->organization as $item) {
                    $res['Organization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->preferredMaxBytes) {
            $res['PreferredMaxBytes'] = $this->preferredMaxBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTimeout'])) {
            $model->batchTimeout = $map['BatchTimeout'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['MaxMessageCount'])) {
            $model->maxMessageCount = $map['MaxMessageCount'];
        }
        if (isset($map['Organization'])) {
            if (!empty($map['Organization'])) {
                $model->organization = [];
                $n                   = 0;
                foreach ($map['Organization'] as $item) {
                    $model->organization[$n++] = null !== $item ? organization::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PreferredMaxBytes'])) {
            $model->preferredMaxBytes = $map['PreferredMaxBytes'];
        }

        return $model;
    }
}
