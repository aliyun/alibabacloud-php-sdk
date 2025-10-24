<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribePocFunctionsResponseBody\functions;

class DescribePocFunctionsResponseBody extends Model
{
    /**
     * @var functions[]
     */
    public $functions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'functions' => 'Functions',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->functions)) {
            Model::validateArray($this->functions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functions) {
            if (\is_array($this->functions)) {
                $res['Functions'] = [];
                $n1 = 0;
                foreach ($this->functions as $item1) {
                    $res['Functions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Functions'])) {
            if (!empty($map['Functions'])) {
                $model->functions = [];
                $n1 = 0;
                foreach ($map['Functions'] as $item1) {
                    $model->functions[$n1] = functions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
