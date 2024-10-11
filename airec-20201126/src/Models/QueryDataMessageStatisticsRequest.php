<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class QueryDataMessageStatisticsRequest extends Model
{
    /**
     * @description The type of behaviors. Valid values: expose, click, like, comment, collect, stay, cart, buy, and evaluate.
     *
     * @example expose
     *
     * @var string
     */
    public $bhvType;

    /**
     * @description The type of the operation. Valid values: update, delete, and add.
     *
     * @example update
     *
     * @var string
     */
    public $cmdType;

    /**
     * @description The end time. The value is a timestamp in seconds.
     *
     * This parameter is required.
     * @example 1586673466
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $imei;

    /**
     * @description The ID of the item. This parameter is required when the value of table is set to item.
     *
     * @example 111
     *
     * @var string
     */
    public $itemId;

    /**
     * @description The type of the item. This parameter is required when the value of table is set to item.
     *
     * @example video
     *
     * @var string
     */
    public $itemType;

    /**
     * @description The source of the operation. Valid values:
     *
     * CONSOLE and FEEDER.
     * @example FEEDER
     *
     * @var string
     */
    public $messageSource;

    /**
     * @description The scene ID.
     *
     * @example test
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description The start time. The value is a timestamp in seconds.
     *
     * This parameter is required.
     * @example 1586673466
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The event tracking ID.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $traceId;

    /**
     * @description The ID of the user. This parameter is required when the value of table is set to user.
     *
     * @example 222
     *
     * @var string
     */
    public $userId;

    /**
     * @description The type of the user. This parameter is required when the value of table is set to user.
     *
     * @example app
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'bhvType'       => 'bhvType',
        'cmdType'       => 'cmdType',
        'endTime'       => 'endTime',
        'imei'          => 'imei',
        'itemId'        => 'itemId',
        'itemType'      => 'itemType',
        'messageSource' => 'messageSource',
        'sceneId'       => 'sceneId',
        'startTime'     => 'startTime',
        'traceId'       => 'traceId',
        'userId'        => 'userId',
        'userType'      => 'userType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bhvType) {
            $res['bhvType'] = $this->bhvType;
        }
        if (null !== $this->cmdType) {
            $res['cmdType'] = $this->cmdType;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->imei) {
            $res['imei'] = $this->imei;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }
        if (null !== $this->messageSource) {
            $res['messageSource'] = $this->messageSource;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['userType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataMessageStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bhvType'])) {
            $model->bhvType = $map['bhvType'];
        }
        if (isset($map['cmdType'])) {
            $model->cmdType = $map['cmdType'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['imei'])) {
            $model->imei = $map['imei'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }
        if (isset($map['messageSource'])) {
            $model->messageSource = $map['messageSource'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userType'])) {
            $model->userType = $map['userType'];
        }

        return $model;
    }
}
