<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CheckSiteFeaturesMatchPlanResponseBody\unPassedSiteQuotas;

class CheckSiteFeaturesMatchPlanResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isPassed;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var unPassedSiteQuotas[]
     */
    public $unPassedSiteQuotas;
    protected $_name = [
        'isPassed' => 'IsPassed',
        'requestId' => 'RequestId',
        'unPassedSiteQuotas' => 'UnPassedSiteQuotas',
    ];

    public function validate()
    {
        if (\is_array($this->unPassedSiteQuotas)) {
            Model::validateArray($this->unPassedSiteQuotas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isPassed) {
            $res['IsPassed'] = $this->isPassed;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->unPassedSiteQuotas) {
            if (\is_array($this->unPassedSiteQuotas)) {
                $res['UnPassedSiteQuotas'] = [];
                $n1 = 0;
                foreach ($this->unPassedSiteQuotas as $item1) {
                    $res['UnPassedSiteQuotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IsPassed'])) {
            $model->isPassed = $map['IsPassed'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UnPassedSiteQuotas'])) {
            if (!empty($map['UnPassedSiteQuotas'])) {
                $model->unPassedSiteQuotas = [];
                $n1 = 0;
                foreach ($map['UnPassedSiteQuotas'] as $item1) {
                    $model->unPassedSiteQuotas[$n1] = unPassedSiteQuotas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
