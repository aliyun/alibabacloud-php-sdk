<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeChannelAreaDistributionStatDataRequest extends Model
{
    /**
     * @description APP ID。
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
     * @description 频道创建时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $createdTs;

    /**
     * @description 频道释放时间，使用UNIX时间戳表示，单位：秒。参数为空表示获取当前时间。
     *
     * @var int
     */
    public $destroyedTs;

    /**
     * @description 父级地区名称，例如：深圳市的父级为广东省。参数为空表示世界范围（国家维度）的统计，例如：中国、英国。
     *
     * @var string
     */
    public $parentArea;
    protected $_name = [
        'appId'       => 'AppId',
        'channelId'   => 'ChannelId',
        'createdTs'   => 'CreatedTs',
        'destroyedTs' => 'DestroyedTs',
        'parentArea'  => 'ParentArea',
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
        if (null !== $this->parentArea) {
            $res['ParentArea'] = $this->parentArea;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChannelAreaDistributionStatDataRequest
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
        if (isset($map['ParentArea'])) {
            $model->parentArea = $map['ParentArea'];
        }

        return $model;
    }
}
