<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data\commentDatas;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data\mainData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var commentDatas[]
     */
    public $commentDatas;

    /**
     * @var mainData
     */
    public $mainData;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'commentDatas' => 'CommentDatas',
        'mainData' => 'MainData',
        'reqId' => 'ReqId',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentDatas) {
            $res['CommentDatas'] = [];
            if (null !== $this->commentDatas && \is_array($this->commentDatas)) {
                $n = 0;
                foreach ($this->commentDatas as $item) {
                    $res['CommentDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mainData) {
            $res['MainData'] = null !== $this->mainData ? $this->mainData->toMap() : null;
        }
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommentDatas'])) {
            if (!empty($map['CommentDatas'])) {
                $model->commentDatas = [];
                $n = 0;
                foreach ($map['CommentDatas'] as $item) {
                    $model->commentDatas[$n++] = null !== $item ? commentDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MainData'])) {
            $model->mainData = mainData::fromMap($map['MainData']);
        }
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
