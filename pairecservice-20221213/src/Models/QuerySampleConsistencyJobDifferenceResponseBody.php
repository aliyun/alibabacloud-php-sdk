<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceResponseBody\differenceHistogram;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceResponseBody\numberFeatureDifferences;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\QuerySampleConsistencyJobDifferenceResponseBody\stringFeatureDifferences;

class QuerySampleConsistencyJobDifferenceResponseBody extends Model
{
    /**
     * @var differenceHistogram[]
     */
    public $differenceHistogram;

    /**
     * @var numberFeatureDifferences[]
     */
    public $numberFeatureDifferences;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stringFeatureDifferences[]
     */
    public $stringFeatureDifferences;
    protected $_name = [
        'differenceHistogram' => 'DifferenceHistogram',
        'numberFeatureDifferences' => 'NumberFeatureDifferences',
        'requestId' => 'RequestId',
        'stringFeatureDifferences' => 'StringFeatureDifferences',
    ];

    public function validate()
    {
        if (\is_array($this->differenceHistogram)) {
            Model::validateArray($this->differenceHistogram);
        }
        if (\is_array($this->numberFeatureDifferences)) {
            Model::validateArray($this->numberFeatureDifferences);
        }
        if (\is_array($this->stringFeatureDifferences)) {
            Model::validateArray($this->stringFeatureDifferences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->differenceHistogram) {
            if (\is_array($this->differenceHistogram)) {
                $res['DifferenceHistogram'] = [];
                $n1 = 0;
                foreach ($this->differenceHistogram as $item1) {
                    $res['DifferenceHistogram'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->numberFeatureDifferences) {
            if (\is_array($this->numberFeatureDifferences)) {
                $res['NumberFeatureDifferences'] = [];
                $n1 = 0;
                foreach ($this->numberFeatureDifferences as $item1) {
                    $res['NumberFeatureDifferences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stringFeatureDifferences) {
            if (\is_array($this->stringFeatureDifferences)) {
                $res['StringFeatureDifferences'] = [];
                $n1 = 0;
                foreach ($this->stringFeatureDifferences as $item1) {
                    $res['StringFeatureDifferences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DifferenceHistogram'])) {
            if (!empty($map['DifferenceHistogram'])) {
                $model->differenceHistogram = [];
                $n1 = 0;
                foreach ($map['DifferenceHistogram'] as $item1) {
                    $model->differenceHistogram[$n1] = differenceHistogram::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NumberFeatureDifferences'])) {
            if (!empty($map['NumberFeatureDifferences'])) {
                $model->numberFeatureDifferences = [];
                $n1 = 0;
                foreach ($map['NumberFeatureDifferences'] as $item1) {
                    $model->numberFeatureDifferences[$n1] = numberFeatureDifferences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StringFeatureDifferences'])) {
            if (!empty($map['StringFeatureDifferences'])) {
                $model->stringFeatureDifferences = [];
                $n1 = 0;
                foreach ($map['StringFeatureDifferences'] as $item1) {
                    $model->stringFeatureDifferences[$n1] = stringFeatureDifferences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
