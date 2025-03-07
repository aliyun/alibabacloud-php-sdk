<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateLivePackageChannelCredentialsRequest extends Model
{
    /**
     * @description The channel name.
     *
     * This parameter is required.
     * @example channel-1
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The channel group name.
     *
     * This parameter is required.
     * @example group-1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description Specifies whether to update the credentials. 1: updates the credentials of endpoint 1. 2: updates the credentials of endpoint 2. 3: updates the credentials of endpoints 1 and 2.
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $rotateCredentials;
    protected $_name = [
        'channelName'       => 'ChannelName',
        'groupName'         => 'GroupName',
        'rotateCredentials' => 'RotateCredentials',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->rotateCredentials) {
            $res['RotateCredentials'] = $this->rotateCredentials;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLivePackageChannelCredentialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RotateCredentials'])) {
            $model->rotateCredentials = $map['RotateCredentials'];
        }

        return $model;
    }
}
