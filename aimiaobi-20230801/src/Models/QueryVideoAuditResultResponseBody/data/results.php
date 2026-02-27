<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryVideoAuditResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryVideoAuditResultResponseBody\data\results\result;

class results extends Model
{
    /**
     * @var string
     */
    public $dataId;

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
        'dataId' => 'DataId',
        'reqId' => 'ReqId',
        'result' => 'Result',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1] = result::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
