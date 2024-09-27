<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results;
use AlibabaCloud\Tea\Model;

class ListEvaluationResultsResponseBody extends Model
{
    /**
     * @description The Alibaba Cloud account ID of the member.
     *
     * @example 176618589410****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The request ID.
     *
     * @example BD57329E-131A-59F4-8746-E1CD8D7B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The check results, including the status of the overall check and the results of check items.
     *
     * @var results
     */
    public $results;
    protected $_name = [
        'accountId' => 'AccountId',
        'requestId' => 'RequestId',
        'results'   => 'Results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEvaluationResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        return $model;
    }
}
