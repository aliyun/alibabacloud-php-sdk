<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models\ListChannelRiskDetailsResponseBody;

use AlibabaCloud\SDK\Antirisk\V20221128\Models\ListChannelRiskDetailsResponseBody\data\riskDetails;
use AlibabaCloud\SDK\Antirisk\V20221128\Models\ListChannelRiskDetailsResponseBody\data\riskSumary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var riskDetails[]
     */
    public $riskDetails;

    /**
     * @var riskSumary[]
     */
    public $riskSumary;
    protected $_name = [
        'riskDetails' => 'riskDetails',
        'riskSumary'  => 'riskSumary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskDetails) {
            $res['riskDetails'] = [];
            if (null !== $this->riskDetails && \is_array($this->riskDetails)) {
                $n = 0;
                foreach ($this->riskDetails as $item) {
                    $res['riskDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskSumary) {
            $res['riskSumary'] = [];
            if (null !== $this->riskSumary && \is_array($this->riskSumary)) {
                $n = 0;
                foreach ($this->riskSumary as $item) {
                    $res['riskSumary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['riskDetails'])) {
            if (!empty($map['riskDetails'])) {
                $model->riskDetails = [];
                $n                  = 0;
                foreach ($map['riskDetails'] as $item) {
                    $model->riskDetails[$n++] = null !== $item ? riskDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['riskSumary'])) {
            if (!empty($map['riskSumary'])) {
                $model->riskSumary = [];
                $n                 = 0;
                foreach ($map['riskSumary'] as $item) {
                    $model->riskSumary[$n++] = null !== $item ? riskSumary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
