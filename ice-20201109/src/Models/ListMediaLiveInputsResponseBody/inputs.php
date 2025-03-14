<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaLiveInputsResponseBody\inputs\inputInfos;
use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @description The IDs of the channels associated with the input.
     *
     * @var string[]
     */
    public $channelIds;

    /**
     * @description The time when the input was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-12-03T06:56:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the input.
     *
     * @example SEGK5KA6KYKAWQQH
     *
     * @var string
     */
    public $inputId;

    /**
     * @description The input configurations.
     *
     * @var inputInfos[]
     */
    public $inputInfos;

    /**
     * @description The name of the input.
     *
     * @example myinput
     *
     * @var string
     */
    public $name;

    /**
     * @description The IDs of the security groups associated with the input.
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The input type.
     *
     * @example RTMP_PUSH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'channelIds' => 'ChannelIds',
        'createTime' => 'CreateTime',
        'inputId' => 'InputId',
        'inputInfos' => 'InputInfos',
        'name' => 'Name',
        'securityGroupIds' => 'SecurityGroupIds',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelIds) {
            $res['ChannelIds'] = $this->channelIds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->inputId) {
            $res['InputId'] = $this->inputId;
        }
        if (null !== $this->inputInfos) {
            $res['InputInfos'] = [];
            if (null !== $this->inputInfos && \is_array($this->inputInfos)) {
                $n = 0;
                foreach ($this->inputInfos as $item) {
                    $res['InputInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = $map['ChannelIds'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InputId'])) {
            $model->inputId = $map['InputId'];
        }
        if (isset($map['InputInfos'])) {
            if (!empty($map['InputInfos'])) {
                $model->inputInfos = [];
                $n = 0;
                foreach ($map['InputInfos'] as $item) {
                    $model->inputInfos[$n++] = null !== $item ? inputInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
