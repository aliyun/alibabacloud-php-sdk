<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\elasticPolicy\timePolicyList;
use AlibabaCloud\Tea\Model;

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
        'elasticType'    => 'ElasticType',
        'maxReplica'     => 'MaxReplica',
        'timePolicyList' => 'TimePolicyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticType) {
            $res['ElasticType'] = $this->elasticType;
        }
        if (null !== $this->maxReplica) {
            $res['MaxReplica'] = $this->maxReplica;
        }
        if (null !== $this->timePolicyList) {
            $res['TimePolicyList'] = [];
            if (null !== $this->timePolicyList && \is_array($this->timePolicyList)) {
                $n = 0;
                foreach ($this->timePolicyList as $item) {
                    $res['TimePolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticPolicy
     */
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
                $n                     = 0;
                foreach ($map['TimePolicyList'] as $item) {
                    $model->timePolicyList[$n++] = null !== $item ? timePolicyList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
