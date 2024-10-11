<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class QueryDataMessageRequest extends Model
{
    /**
     * @example expose
     *
     * @var string
     */
    public $bhvType;

    /**
     * @example update
     *
     * @var string
     */
    public $cmdType;

    /**
     * @description This parameter is required.
     *
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
     * @example 111
     *
     * @var string
     */
    public $itemId;

    /**
     * @example video
     *
     * @var string
     */
    public $itemType;

    /**
     * @example CONSOLE
     *
     * @var string
     */
    public $messageSource;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneId;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description This parameter is required.
     *
     * @example 1586673466
     *
     * @var int
     */
    public $startTime;

    /**
     * @example Alibaba
     *
     * @var string
     */
    public $traceId;

    /**
     * @example 222
     *
     * @var string
     */
    public $userId;

    /**
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
        'page'          => 'page',
        'sceneId'       => 'sceneId',
        'size'          => 'size',
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
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
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
     * @return QueryDataMessageRequest
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
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
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
