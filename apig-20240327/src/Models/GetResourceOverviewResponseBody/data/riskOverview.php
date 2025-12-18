<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\riskOverview\riskDetails;

class riskOverview extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @var riskDetails[]
     */
    public $riskDetails;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'count' => 'count',
        'riskDetails' => 'riskDetails',
        'riskLevel' => 'riskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->riskDetails)) {
            Model::validateArray($this->riskDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->riskDetails) {
            if (\is_array($this->riskDetails)) {
                $res['riskDetails'] = [];
                $n1 = 0;
                foreach ($this->riskDetails as $item1) {
                    $res['riskDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['riskDetails'])) {
            if (!empty($map['riskDetails'])) {
                $model->riskDetails = [];
                $n1 = 0;
                foreach ($map['riskDetails'] as $item1) {
                    $model->riskDetails[$n1] = riskDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        return $model;
    }
}
