<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelJoinInfoRequest extends Model
{
    /**
     * @description APP ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 频道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 频道创建时间
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 频道释放时间
     *
     * @var int
     */
    public $destroyedTs;
    protected $_name = [
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'createdTs'   => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->createdTs) {
            $res['CreatedTs'] = $this->createdTs;
        }
        if (null !== $this->destroyedTs) {
            $res['DestroyedTs'] = $this->destroyedTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelJoinInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['CreatedTs'])) {
            $model->createdTs = $map['CreatedTs'];
        }
        if (isset($map['DestroyedTs'])) {
            $model->destroyedTs = $map['DestroyedTs'];
        }

        return $model;
    }
}
