<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageModerationResultResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageModerationResultResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2a5389eb-4ff8-4584-ac99-644e2a539aa1
     *
     * @var string
     */
    public $dataId;

    /**
     * @example [{"result":[{"confidence":81.22,"label":"violent_explosion"}]}]
     *
     * @var string
     */
    public $frame;

    /**
     * @example 1
     *
     * @var int
     */
    public $frameNum;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'dataId'    => 'DataId',
        'frame'     => 'Frame',
        'frameNum'  => 'FrameNum',
        'reqId'     => 'ReqId',
        'result'    => 'Result',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->frame) {
            $res['Frame'] = $this->frame;
        }
        if (null !== $this->frameNum) {
            $res['FrameNum'] = $this->frameNum;
        }
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Frame'])) {
            $model->frame = $map['Frame'];
        }
        if (isset($map['FrameNum'])) {
            $model->frameNum = $map['FrameNum'];
        }
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
