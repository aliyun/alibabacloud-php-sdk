<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\RecommendResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The weight of the specified process.
     *
     * @example 0
     *
     * @var float
     */
    public $flowWeight;

    /**
     * @description The ID of the recommended item.
     *
     * @example 123
     *
     * @var string
     */
    public $itemId;

    /**
     * @description The type of the recommended item.
     *
     * @example item
     *
     * @var string
     */
    public $itemType;

    /**
     * @description This parameter may be used in the debugging process. You can ignore this parameter.
     *
     * @example xxx
     *
     * @var string
     */
    public $matchInfo;

    /**
     * @description The status of the execution.
     *
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The position at which the recommended item is displayed. The position number starts from 0. The return results are ranked by position. You can ignore this parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @description The event tracking ID. This parameter is uploaded together with user behaviors on the recommended item. In this case, the value of this parameter is ali.
     *
     * @example ali
     *
     * @var string
     */
    public $traceId;

    /**
     * @description The information about event tracking. The value of this parameter varies based on different items and needs to be uploaded together with the corresponding behavior data.
     *
     * @example "1007.62381.131491.100200300000000:bcb946ed-3f09-4e9b-bf4a-c19862f42231:792783::0:s101:::15:content___130788_stall:item:i2i_common_common:0.0205279946753756:null:null:1673258031504::context__recall_index=156,context__hour=17,context__trigger_num=2::C7EF99C9-6C55-5D45-A8D5-0754082E9DCF:hot_common,i2i_common_common,i2i_swing_common,hot_full:::::"
     *
     * @var string
     */
    public $traceInfo;

    /**
     * @description The weight of the recommended item.
     *
     * @example 1
     *
     * @var float
     */
    public $weight;
    protected $_name = [
        'flowWeight' => 'flowWeight',
        'itemId'     => 'itemId',
        'itemType'   => 'itemType',
        'matchInfo'  => 'matchInfo',
        'message'    => 'message',
        'position'   => 'position',
        'traceId'    => 'traceId',
        'traceInfo'  => 'traceInfo',
        'weight'     => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowWeight) {
            $res['flowWeight'] = $this->flowWeight;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }
        if (null !== $this->matchInfo) {
            $res['matchInfo'] = $this->matchInfo;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->position) {
            $res['position'] = $this->position;
        }
        if (null !== $this->traceId) {
            $res['traceId'] = $this->traceId;
        }
        if (null !== $this->traceInfo) {
            $res['traceInfo'] = $this->traceInfo;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flowWeight'])) {
            $model->flowWeight = $map['flowWeight'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }
        if (isset($map['matchInfo'])) {
            $model->matchInfo = $map['matchInfo'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['position'])) {
            $model->position = $map['position'];
        }
        if (isset($map['traceId'])) {
            $model->traceId = $map['traceId'];
        }
        if (isset($map['traceInfo'])) {
            $model->traceInfo = $map['traceInfo'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
