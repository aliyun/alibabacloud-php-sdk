<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class QueryDataMessageRequest extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $cmdType;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userType;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $bhvType;

    /**
     * @var string
     */
    public $messageSource;
    protected $_name = [
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
        'cmdType'       => 'CmdType',
        'itemId'        => 'ItemId',
        'itemType'      => 'ItemType',
        'userId'        => 'UserId',
        'userType'      => 'UserType',
        'page'          => 'Page',
        'size'          => 'Size',
        'traceId'       => 'TraceId',
        'sceneId'       => 'SceneId',
        'bhvType'       => 'BhvType',
        'messageSource' => 'MessageSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->cmdType) {
            $res['CmdType'] = $this->cmdType;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->bhvType) {
            $res['BhvType'] = $this->bhvType;
        }
        if (null !== $this->messageSource) {
            $res['MessageSource'] = $this->messageSource;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['CmdType'])) {
            $model->cmdType = $map['CmdType'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['BhvType'])) {
            $model->bhvType = $map['BhvType'];
        }
        if (isset($map['MessageSource'])) {
            $model->messageSource = $map['MessageSource'];
        }

        return $model;
    }
}
