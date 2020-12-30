<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\RecommendResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $traceInfo;

    /**
     * @var float
     */
    public $weight;

    /**
     * @var string
     */
    public $matchInfo;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var int
     */
    public $position;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'traceInfo' => 'TraceInfo',
        'weight'    => 'Weight',
        'matchInfo' => 'MatchInfo',
        'itemType'  => 'ItemType',
        'position'  => 'Position',
        'itemId'    => 'ItemId',
        'traceId'   => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->traceInfo) {
            $res['TraceInfo'] = $this->traceInfo;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->matchInfo) {
            $res['MatchInfo'] = $this->matchInfo;
        }
        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['TraceInfo'])) {
            $model->traceInfo = $map['TraceInfo'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['MatchInfo'])) {
            $model->matchInfo = $map['MatchInfo'];
        }
        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
