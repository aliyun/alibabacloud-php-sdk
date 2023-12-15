<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class UpdateChannelConfigRequest extends Model
{
    /**
     * @var int
     */
    public $batchTimeout;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var int
     */
    public $maxMessageCount;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var int
     */
    public $preferredMaxBytes;
    protected $_name = [
        'batchTimeout'      => 'BatchTimeout',
        'channelId'         => 'ChannelId',
        'maxMessageCount'   => 'MaxMessageCount',
        'organizationId'    => 'OrganizationId',
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->maxMessageCount) {
            $res['MaxMessageCount'] = $this->maxMessageCount;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->preferredMaxBytes) {
            $res['PreferredMaxBytes'] = $this->preferredMaxBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateChannelConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTimeout'])) {
            $model->batchTimeout = $map['BatchTimeout'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['MaxMessageCount'])) {
            $model->maxMessageCount = $map['MaxMessageCount'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['PreferredMaxBytes'])) {
            $model->preferredMaxBytes = $map['PreferredMaxBytes'];
        }

        return $model;
    }
}
