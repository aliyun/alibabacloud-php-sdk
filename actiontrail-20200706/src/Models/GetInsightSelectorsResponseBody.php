<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class GetInsightSelectorsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $insightSelectors;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trailArn;
    protected $_name = [
        'insightSelectors' => 'InsightSelectors',
        'requestId' => 'RequestId',
        'trailArn' => 'TrailArn',
    ];

    public function validate()
    {
        if (\is_array($this->insightSelectors)) {
            Model::validateArray($this->insightSelectors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->insightSelectors) {
            if (\is_array($this->insightSelectors)) {
                $res['InsightSelectors'] = [];
                $n1 = 0;
                foreach ($this->insightSelectors as $item1) {
                    $res['InsightSelectors'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trailArn) {
            $res['TrailArn'] = $this->trailArn;
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
        if (isset($map['InsightSelectors'])) {
            if (!empty($map['InsightSelectors'])) {
                $model->insightSelectors = [];
                $n1 = 0;
                foreach ($map['InsightSelectors'] as $item1) {
                    $model->insightSelectors[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrailArn'])) {
            $model->trailArn = $map['TrailArn'];
        }

        return $model;
    }
}
