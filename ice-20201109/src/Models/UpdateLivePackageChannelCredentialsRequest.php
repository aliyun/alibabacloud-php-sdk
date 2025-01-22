<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateLivePackageChannelCredentialsRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;
    /**
     * @var string
     */
    public $groupName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
