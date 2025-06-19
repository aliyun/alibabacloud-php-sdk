<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\elasticPolicy\timePolicyList;

class elasticPolicy extends Model
{
    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var int
     */
    public $maxReplica;

    /**
     * @var timePolicyList[]
     */
    public $timePolicyList;
    protected $_name = [
        'elasticType' => 'ElasticType',
        'maxReplica' => 'MaxReplica',
        'timePolicyList' => 'TimePolicyList',
    ];

    public function validate()
    {
        if (\is_array($this->timePolicyList)) {
            Model::validateArray($this->timePolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticType) {
            $res['ElasticType'] = $this->elasticType;
        }

        if (null !== $this->maxReplica) {
            $res['MaxReplica'] = $this->maxReplica;
        }

        if (null !== $this->timePolicyList) {
            if (\is_array($this->timePolicyList)) {
                $res['TimePolicyList'] = [];
                $n1 = 0;
                foreach ($this->timePolicyList as $item1) {
                    $res['TimePolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ElasticType'])) {
            $model->elasticType = $map['ElasticType'];
        }

        if (isset($map['MaxReplica'])) {
            $model->maxReplica = $map['MaxReplica'];
        }

        if (isset($map['TimePolicyList'])) {
            if (!empty($map['TimePolicyList'])) {
                $model->timePolicyList = [];
                $n1 = 0;
                foreach ($map['TimePolicyList'] as $item1) {
                    $model->timePolicyList[$n1] = timePolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
