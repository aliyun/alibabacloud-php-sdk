<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationTemplatesResponseBody\quotaApplicationTemplates;

class ListQuotaApplicationTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var quotaApplicationTemplates[]
     */
    public $quotaApplicationTemplates;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'quotaApplicationTemplates' => 'QuotaApplicationTemplates',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->quotaApplicationTemplates)) {
            Model::validateArray($this->quotaApplicationTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->quotaApplicationTemplates) {
            if (\is_array($this->quotaApplicationTemplates)) {
                $res['QuotaApplicationTemplates'] = [];
                $n1 = 0;
                foreach ($this->quotaApplicationTemplates as $item1) {
                    $res['QuotaApplicationTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['QuotaApplicationTemplates'])) {
            if (!empty($map['QuotaApplicationTemplates'])) {
                $model->quotaApplicationTemplates = [];
                $n1 = 0;
                foreach ($map['QuotaApplicationTemplates'] as $item1) {
                    $model->quotaApplicationTemplates[$n1] = quotaApplicationTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
