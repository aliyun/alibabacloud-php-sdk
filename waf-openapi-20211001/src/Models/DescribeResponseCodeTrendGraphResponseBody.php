<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResponseCodeTrendGraphResponseBody\responseCodes;

class DescribeResponseCodeTrendGraphResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var responseCodes[]
     */
    public $responseCodes;
    protected $_name = [
        'requestId'     => 'RequestId',
        'responseCodes' => 'ResponseCodes',
    ];

    public function validate()
    {
        if (\is_array($this->responseCodes)) {
            Model::validateArray($this->responseCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->responseCodes) {
            if (\is_array($this->responseCodes)) {
                $res['ResponseCodes'] = [];
                $n1                   = 0;
                foreach ($this->responseCodes as $item1) {
                    $res['ResponseCodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ResponseCodes'])) {
            if (!empty($map['ResponseCodes'])) {
                $model->responseCodes = [];
                $n1                   = 0;
                foreach ($map['ResponseCodes'] as $item1) {
                    $model->responseCodes[$n1++] = responseCodes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
