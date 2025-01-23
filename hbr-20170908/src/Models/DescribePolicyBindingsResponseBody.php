<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings;

class DescribePolicyBindingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var policyBindings[]
     */
    public $policyBindings;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
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
        if (\is_array($this->policyBindings)) {
            Model::validateArray($this->policyBindings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->policyBindings)) {
                $res['PolicyBindings'] = [];
                $n1                    = 0;
                foreach ($this->policyBindings as $item1) {
                    $res['PolicyBindings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                    = 0;
                foreach ($map['PolicyBindings'] as $item1) {
                    $model->policyBindings[$n1++] = policyBindings::fromMap($item1);
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
