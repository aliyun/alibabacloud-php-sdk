<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBgpResSummaryResponseBody\fullNodesSummary;
use AlibabaCloud\Tea\Model;

class DescribeBgpResSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var fullNodesSummary
     */
    public $fullNodesSummary;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'        => 'RequestId',
        'fullNodesSummary' => 'FullNodesSummary',
        'promptInfo'       => 'PromptInfo',
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
        if (null !== $this->fullNodesSummary) {
            $res['FullNodesSummary'] = null !== $this->fullNodesSummary ? $this->fullNodesSummary->toMap() : null;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBgpResSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FullNodesSummary'])) {
            $model->fullNodesSummary = fullNodesSummary::fromMap($map['FullNodesSummary']);
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
