<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTradeMarkApplicationsByIntentionRequest extends Model
{
    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $tmProduceStatus;
    protected $_name = [
        'intentionBizId'  => 'IntentionBizId',
        'channel'         => 'Channel',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'tmProduceStatus' => 'TmProduceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tmProduceStatus) {
            $res['TmProduceStatus'] = $this->tmProduceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTradeMarkApplicationsByIntentionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TmProduceStatus'])) {
            $model->tmProduceStatus = $map['TmProduceStatus'];
        }

        return $model;
    }
}
