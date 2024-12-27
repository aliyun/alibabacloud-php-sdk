<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings;
use AlibabaCloud\Tea\Model;

class DescribePolicyBindingsResponseBody extends Model
{
    /**
     * @description Return code, 200 indicates success.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of results per query.
     *
     * Range: 10~100. Default: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description Description of the return message. A successful response usually returns \\"successful\\", while an error will return a corresponding error message.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The token required to fetch the next page of policy and data source bindings.
     *
     * @example caeba0bbb2be03f84eb48b699f0a
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description List of bound policies.
     *
     * @var policyBindings[]
     */
    public $policyBindings;

    /**
     * @description Request ID.
     *
     * @example 5225929A-4EBD-55EE-9FE1-4A130E582A76
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * - false: Failure
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Total number of records.
     *
     * @example 38
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'           => 'Code',
        'maxResults'     => 'MaxResults',
        'message'        => 'Message',
        'nextToken'      => 'NextToken',
        'policyBindings' => 'PolicyBindings',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policyBindings) {
            $res['PolicyBindings'] = [];
            if (null !== $this->policyBindings && \is_array($this->policyBindings)) {
                $n = 0;
                foreach ($this->policyBindings as $item) {
                    $res['PolicyBindings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyBindingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PolicyBindings'])) {
            if (!empty($map['PolicyBindings'])) {
                $model->policyBindings = [];
                $n                     = 0;
                foreach ($map['PolicyBindings'] as $item) {
                    $model->policyBindings[$n++] = null !== $item ? policyBindings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
