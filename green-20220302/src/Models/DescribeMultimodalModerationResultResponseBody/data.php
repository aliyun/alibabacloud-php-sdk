<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data\commentDatas;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data\mainData;

class data extends Model
{
    /**
     * @var commentDatas[]
     */
    public $commentDatas;

    /**
     * @var string
     */
    public $dataId;

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
        'dataId' => 'DataId',
        'mainData' => 'MainData',
        'reqId' => 'ReqId',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->commentDatas)) {
            Model::validateArray($this->commentDatas);
        }
        if (null !== $this->mainData) {
            $this->mainData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commentDatas) {
            if (\is_array($this->commentDatas)) {
                $res['CommentDatas'] = [];
                $n1 = 0;
                foreach ($this->commentDatas as $item1) {
                    $res['CommentDatas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->mainData) {
            $res['MainData'] = null !== $this->mainData ? $this->mainData->toArray($noStream) : $this->mainData;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommentDatas'])) {
            if (!empty($map['CommentDatas'])) {
                $model->commentDatas = [];
                $n1 = 0;
                foreach ($map['CommentDatas'] as $item1) {
                    $model->commentDatas[$n1] = commentDatas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
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
