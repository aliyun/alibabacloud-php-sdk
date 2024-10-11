<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class RecommendRequest extends Model
{
    /**
     * @description The status of the execution.
     *
     * @example eyJqb2luIjoiYW5kIiwiZmlsdGVycyI6W3siY29uZCI6ImNvbnRhaW4iLCJmaWVsZCI6InRhZ3MiLCJ2YWx1ZSI6IuWPjOS6uiJ9XX0.
     *
     * @var string
     */
    public $filter;

    /**
     * @description The ID of the scene in which the item is to be recommended.
     *
     * @example 06e1565409c9fc4887036b974421****
     *
     * @var string
     */
    public $imei;

    /**
     * @description The HTTP status code.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The information about event tracking. The value of this parameter varies based on different items and needs to be uploaded together with the corresponding behavior data.
     *
     * @example 1001
     *
     * @var string
     */
    public $items;

    /**
     * @description N/A
     *
     * @example true
     *
     * @var bool
     */
    public $rankOpen;

    /**
     * @description The type of the recommended item.
     *
     * @example gul
     *
     * @var string
     */
    public $recType;

    /**
     * @description The returned results.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $returnCount;

    /**
     * @description The number of result entries to return. Valid values: 0 to 50.
     *
     * @example test
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description The position at which the recommended item is displayed. The position number starts from 0. The return results are ranked by position. You can ignore this parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description 如果需要使用坑位策略，请求参数内新增strategy="fixedSlot"，此时系统将按照坑位配置返回推荐结果
     *
     * @example fixedSlot
     *
     * @var string
     */
    public $strategy;

    /**
     * @description The items used for related recommendations in specified scenes.
     *
     * @example 123
     *
     * @var string
     */
    public $userId;

    /**
     * @description The ID of the request.
     *
     * @example 1
     *
     * @var string
     */
    public $userInfo;
    protected $_name = [
        'filter'      => 'filter',
        'imei'        => 'imei',
        'ip'          => 'ip',
        'items'       => 'items',
        'rankOpen'    => 'rankOpen',
        'recType'     => 'recType',
        'returnCount' => 'returnCount',
        'sceneId'     => 'sceneId',
        'serviceType' => 'serviceType',
        'strategy'    => 'strategy',
        'userId'      => 'userId',
        'userInfo'    => 'userInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }
        if (null !== $this->imei) {
            $res['imei'] = $this->imei;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }
        if (null !== $this->items) {
            $res['items'] = $this->items;
        }
        if (null !== $this->rankOpen) {
            $res['rankOpen'] = $this->rankOpen;
        }
        if (null !== $this->recType) {
            $res['recType'] = $this->recType;
        }
        if (null !== $this->returnCount) {
            $res['returnCount'] = $this->returnCount;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
        }
        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }
        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userInfo) {
            $res['userInfo'] = $this->userInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecommendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }
        if (isset($map['imei'])) {
            $model->imei = $map['imei'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }
        if (isset($map['items'])) {
            $model->items = $map['items'];
        }
        if (isset($map['rankOpen'])) {
            $model->rankOpen = $map['rankOpen'];
        }
        if (isset($map['recType'])) {
            $model->recType = $map['recType'];
        }
        if (isset($map['returnCount'])) {
            $model->returnCount = $map['returnCount'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }
        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }
        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userInfo'])) {
            $model->userInfo = $map['userInfo'];
        }

        return $model;
    }
}
