<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeCallRequest extends Model
{
    /**
     * @description APP ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 频道ID。
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 创建频道时间，使用UNIX时间戳表示，单位：秒。
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
     * @description 查询的扩展。取值：USER_DURATION_STAT：用户时长统计数据类型。
     *
     * @var string
     */
    public $extDataType;

    /**
     * @description 是否查询通信体验信息，不传默认是true
     *
     * @var bool
     */
    public $queryExpInfo;
    protected $_name = [
        'appId'        => 'AppId',
        'channelId'    => 'ChannelId',
        'createdTs'    => 'CreatedTs',
        'destroyedTs'  => 'DestroyedTs',
        'extDataType'  => 'ExtDataType',
        'queryExpInfo' => 'QueryExpInfo',
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
        if (null !== $this->extDataType) {
            $res['ExtDataType'] = $this->extDataType;
        }
        if (null !== $this->queryExpInfo) {
            $res['QueryExpInfo'] = $this->queryExpInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCallRequest
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
        if (isset($map['ExtDataType'])) {
            $model->extDataType = $map['ExtDataType'];
        }
        if (isset($map['QueryExpInfo'])) {
            $model->queryExpInfo = $map['QueryExpInfo'];
        }

        return $model;
    }
}
