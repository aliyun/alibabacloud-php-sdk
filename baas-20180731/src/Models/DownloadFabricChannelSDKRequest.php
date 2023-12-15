<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DownloadFabricChannelSDKRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'channelId'      => 'ChannelId',
        'location'       => 'Location',
        'organizationId' => 'OrganizationId',
        'username'       => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadFabricChannelSDKRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
