<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeResponseCodeTrendGraphResponseBody\responseCodes;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->responseCodes) {
            $res['ResponseCodes'] = [];
            if (null !== $this->responseCodes && \is_array($this->responseCodes)) {
                $n = 0;
                foreach ($this->responseCodes as $item) {
                    $res['ResponseCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResponseCodeTrendGraphResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResponseCodes'])) {
            if (!empty($map['ResponseCodes'])) {
                $model->responseCodes = [];
                $n                    = 0;
                foreach ($map['ResponseCodes'] as $item) {
                    $model->responseCodes[$n++] = null !== $item ? responseCodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
