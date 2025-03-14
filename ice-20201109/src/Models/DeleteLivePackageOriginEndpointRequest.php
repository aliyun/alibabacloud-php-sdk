<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteLivePackageOriginEndpointRequest extends Model
{
    /**
     * @description The channel name.
     *
     * This parameter is required.
     *
     * @example channel-1
     *
     * @var string
     */
    public $channelName;

    /**
     * @description The endpoint name.
     *
     * This parameter is required.
     *
     * @example endpoint-1
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The channel group name.
     *
     * This parameter is required.
     *
     * @example channel-group-1
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'channelName' => 'ChannelName',
        'endpointName' => 'EndpointName',
        'groupName' => 'GroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLivePackageOriginEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
