<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseDone\response;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseDone\response\usage\inputTokensDetails;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ResponseDone\response\usage\outputTokensDetails;

class usage extends Model
{
    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var inputTokensDetails
     */
    public $inputTokensDetails;

    /**
     * @var outputTokensDetails
     */
    public $outputTokensDetails;
    protected $_name = [
        'totalTokens' => 'total_tokens',
        'inputTokens' => 'input_tokens',
        'outputTokens' => 'output_tokens',
        'inputTokensDetails' => 'input_tokens_details',
        'outputTokensDetails' => 'output_tokens_details',
    ];

    public function validate()
    {
        if (null !== $this->inputTokensDetails) {
            $this->inputTokensDetails->validate();
        }
        if (null !== $this->outputTokensDetails) {
            $this->outputTokensDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalTokens) {
            $res['total_tokens'] = $this->totalTokens;
        }

        if (null !== $this->inputTokens) {
            $res['input_tokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['output_tokens'] = $this->outputTokens;
        }

        if (null !== $this->inputTokensDetails) {
            $res['input_tokens_details'] = null !== $this->inputTokensDetails ? $this->inputTokensDetails->toArray($noStream) : $this->inputTokensDetails;
        }

        if (null !== $this->outputTokensDetails) {
            $res['output_tokens_details'] = null !== $this->outputTokensDetails ? $this->outputTokensDetails->toArray($noStream) : $this->outputTokensDetails;
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
        if (isset($map['total_tokens'])) {
            $model->totalTokens = $map['total_tokens'];
        }

        if (isset($map['input_tokens'])) {
            $model->inputTokens = $map['input_tokens'];
        }

        if (isset($map['output_tokens'])) {
            $model->outputTokens = $map['output_tokens'];
        }

        if (isset($map['input_tokens_details'])) {
            $model->inputTokensDetails = inputTokensDetails::fromMap($map['input_tokens_details']);
        }

        if (isset($map['output_tokens_details'])) {
            $model->outputTokensDetails = outputTokensDetails::fromMap($map['output_tokens_details']);
        }

        return $model;
    }
}
