<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdc\V20201214\Models;

use AlibabaCloud\Tea\Model;

class DescribeCallListRequest extends Model
{
    /**
     * @description APP ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 通信状态。取值：IN：进行中。OUT：已结束。
     *
     * @var string
     */
    public $callStatus;

    /**
     * @description 频道ID
     *
     * @var string
     */
    public $channelId;

    /**
     * @description 查询的结束时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $endTs;

    /**
     * @description 排序字段。取值：BAD_EXP_USER_COUNT_DESC：按体验欠佳人数降序。BAD_EXP_USER_COUNT_ASC：按体验欠佳人数升序
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description 每页数量
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 查询模式。取值：ALL：全部通话。FOLLOW：关注通话。
     *
     * @var string
     */
    public $queryMode;

    /**
     * @description 查询的开始时间，使用UNIX时间戳表示，单位：秒。
     *
     * @var int
     */
    public $startTs;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'      => 'AppId',
        'callStatus' => 'CallStatus',
        'channelId'  => 'ChannelId',
        'endTs'      => 'EndTs',
        'orderBy'    => 'OrderBy',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
        'queryMode'  => 'QueryMode',
        'startTs'    => 'StartTs',
        'userId'     => 'UserId',
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
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCallListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
