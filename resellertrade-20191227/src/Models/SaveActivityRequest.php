<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models;

use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\SaveActivityRequest\fusionPromotionParamList;
use AlibabaCloud\Tea\Model;

class SaveActivityRequest extends Model
{
    /**
     * @var string
     */
    public $activityName;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int[]
     */
    public $blackUidList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var mixed[]
     */
    public $extendMap;

    /**
     * @var fusionPromotionParamList[]
     */
    public $fusionPromotionParamList;

    /**
     * @var string
     */
    public $publishTag;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int[]
     */
    public $testAccountUidList;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int[]
     */
    public $whiteUidList;
    protected $_name = [
        'activityName'             => 'ActivityName',
        'bizId'                    => 'BizId',
        'blackUidList'             => 'BlackUidList',
        'description'              => 'Description',
        'endTime'                  => 'EndTime',
        'extendMap'                => 'ExtendMap',
        'fusionPromotionParamList' => 'FusionPromotionParamList',
        'publishTag'               => 'PublishTag',
        'startTime'                => 'StartTime',
        'testAccountUidList'       => 'TestAccountUidList',
        'token'                    => 'Token',
        'whiteUidList'             => 'WhiteUidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityName) {
            $res['ActivityName'] = $this->activityName;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->blackUidList) {
            $res['BlackUidList'] = $this->blackUidList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extendMap) {
            $res['ExtendMap'] = $this->extendMap;
        }
        if (null !== $this->fusionPromotionParamList) {
            $res['FusionPromotionParamList'] = [];
            if (null !== $this->fusionPromotionParamList && \is_array($this->fusionPromotionParamList)) {
                $n = 0;
                foreach ($this->fusionPromotionParamList as $item) {
                    $res['FusionPromotionParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->publishTag) {
            $res['PublishTag'] = $this->publishTag;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->testAccountUidList) {
            $res['TestAccountUidList'] = $this->testAccountUidList;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->whiteUidList) {
            $res['WhiteUidList'] = $this->whiteUidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveActivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityName'])) {
            $model->activityName = $map['ActivityName'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BlackUidList'])) {
            if (!empty($map['BlackUidList'])) {
                $model->blackUidList = $map['BlackUidList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtendMap'])) {
            $model->extendMap = $map['ExtendMap'];
        }
        if (isset($map['FusionPromotionParamList'])) {
            if (!empty($map['FusionPromotionParamList'])) {
                $model->fusionPromotionParamList = [];
                $n                               = 0;
                foreach ($map['FusionPromotionParamList'] as $item) {
                    $model->fusionPromotionParamList[$n++] = null !== $item ? fusionPromotionParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PublishTag'])) {
            $model->publishTag = $map['PublishTag'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TestAccountUidList'])) {
            if (!empty($map['TestAccountUidList'])) {
                $model->testAccountUidList = $map['TestAccountUidList'];
            }
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['WhiteUidList'])) {
            if (!empty($map['WhiteUidList'])) {
                $model->whiteUidList = $map['WhiteUidList'];
            }
        }

        return $model;
    }
}
