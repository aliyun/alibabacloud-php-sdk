<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ValidateNormalizationRuleResponseBody\validateResult;

class ValidateNormalizationRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var validateResult[]
     */
    public $validateResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'validateResult' => 'ValidateResult',
    ];

    public function validate()
    {
        if (\is_array($this->validateResult)) {
            Model::validateArray($this->validateResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->validateResult) {
            if (\is_array($this->validateResult)) {
                $res['ValidateResult'] = [];
                $n1 = 0;
                foreach ($this->validateResult as $item1) {
                    $res['ValidateResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ValidateResult'])) {
            if (!empty($map['ValidateResult'])) {
                $model->validateResult = [];
                $n1 = 0;
                foreach ($map['ValidateResult'] as $item1) {
                    $model->validateResult[$n1] = validateResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
