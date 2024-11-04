<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\NotifyStrategyForModify\routes;

use AlibabaCloud\Tea\Model;

class channels extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $channelType;

    /**
     * @var string[]
     */
    public $enabledSubChannels;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $receivers;
    protected $_name = [
        'channelType'        => 'channelType',
        'enabledSubChannels' => 'enabledSubChannels',
        'receivers'          => 'receivers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }
        if (null !== $this->enabledSubChannels) {
            $res['enabledSubChannels'] = $this->enabledSubChannels;
        }
        if (null !== $this->receivers) {
            $res['receivers'] = $this->receivers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }
        if (isset($map['enabledSubChannels'])) {
            if (!empty($map['enabledSubChannels'])) {
                $model->enabledSubChannels = $map['enabledSubChannels'];
            }
        }
        if (isset($map['receivers'])) {
            if (!empty($map['receivers'])) {
                $model->receivers = $map['receivers'];
            }
        }

        return $model;
    }
}
